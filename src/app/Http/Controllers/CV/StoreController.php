<?php

namespace App\Http\Controllers\CV;

use App\Http\Controllers\Controller;
use App\Http\Requests\CV\CVStoreRequest;

class StoreController extends Controller
{
    public function step1(CVStoreRequest $request)
    {
        $data = $request->validated();
        session(['step1' => $data]);

        return redirect()->route('cv.create.step2');
    }

    public function step2(CVStoreRequest $request)
    {
        $data = $request->validated();
        $data['stack'] = array_map('trim', explode(',', $data['stack']));
        $data['company'] = array_map('trim', explode(',', $data['company']));

        session(['step2' => $data]);

        return redirect()->route('cv.create.step3');
    }

    public function step3(CVStoreRequest $request)
    {
        $data = $request->validated();
        $data['hobby'] = array_map('trim', explode(',', $data['hobby']));
        $data['language'] = array_map('trim', explode(',', $data['language']));

        session(['step3' => $data]);

        return redirect()->route('cv.generate');
    }
}
