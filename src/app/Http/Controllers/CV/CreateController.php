<?php

namespace App\Http\Controllers\CV;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function step1()
    {
        return view('cv.create.step1');
    }

    public function step2()
    {
        return view('cv.create.step2');
    }

    public function step3()
    {
        return view('cv.create.step3');
    }
}
