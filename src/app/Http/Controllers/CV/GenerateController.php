<?php

namespace App\Http\Controllers\CV;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\CV;

use function Laravel\Ai\agent;
class GenerateController extends Controller
{
    public function __invoke()
    {
        $cvData = array_merge(
            session('step1', []),
            session('step2', []),
            session('step3', []),
        );

        $response = agent(
            'Ты профессиональный HR-специалист.'
        )->prompt("
            На основе данных ниже создай профессиональное резюме.
            Улучши формулировки, исправь ошибки.
            Не надо добавлять данные которые не указаны, работай только с тем что есть.
            Верни ТОЛЬКО валидный JSON без markdown, без ```json. 

            Данные: " . json_encode($cvData, JSON_UNESCAPED_UNICODE) . "

            Структура JSON:
            {
                \"name\": \"\",
                \"lastname\": \"\",
                \"number\": \"\",
                \"email\": \"\",
                \"education\": \"\",
                \"job\": \"\",
                \"experience\": \"\",
                \"stack\": [],
                \"company\": [],
                \"language\": [],
                \"hobby\": []
            }"
        );

        $cv = json_decode((string) $response, true);
        CV::create([
            ...$cv,
            'user_id' => auth()->id()
        ]);

        session()->forget(['step1', 'step2', 'step3']);

        $pdf = Pdf::loadView('cv.template', ['cv' => $cv]);
        return $pdf->download('cv.pdf');
    }
}
