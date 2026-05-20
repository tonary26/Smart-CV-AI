<?php

namespace App\Http\Controllers\CV;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Spatie\PdfToText\Pdf;
use Illuminate\Http\Request;

use function Laravel\Ai\agent;
class Analyze extends Controller
{
    public function show()
    {
        return view('cv.analyze.analyze');
    }

    public function analyze(Request $request)
    {
        $request->validate([
            'pdf' => ['required', 'file', 'mimes:pdf']
        ]);

        $pdf = new Pdf();
        $path = $request->file('pdf')->store('temp');
        $text = $pdf->setPdf(Storage::path($path))->text();

        $fileName = $request->file('pdf')->getClientOriginalName();

        Storage::delete($path);

        $response = agent(
            'Ты HR-эксперт. Оцени резюме по шкале от 1 до 100, 
                         сделай очень краткий обзор на ошибки что то по типу: Хороший результат, но документ содержит критические пропуски ключевых слов для позиции Frontend Engineer.
                         укажи сильные и слабые стороны, дай рекомендации.
                         Верни ТОЛЬКО валидный JSON без markdown, без ```json. 
                         Верни JSON: {"score": 0, "feedback": "", "strengths": [], "weaknesses": [], "tips": []}')
            ->prompt($text);

        $result = json_decode((string) $response, true);

        return view('cv.analyze.result', compact('result', 'fileName'));
    }
}
