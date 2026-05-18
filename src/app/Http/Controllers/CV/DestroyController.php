<?php

namespace App\Http\Controllers\CV;

use App\Http\Controllers\Controller;
use App\Models\CV;

class DestroyController extends Controller
{
    public function __invoke(CV $cv)
    {
        $cv->delete();
        return redirect()->route('cv.index');
    }
}
