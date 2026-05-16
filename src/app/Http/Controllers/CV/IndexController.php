<?php

namespace App\Http\Controllers\CV;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CV;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cvs = CV::where('user_id', auth()->id())->get();
        return view('cv.index', compact('cvs'));
    }
}
