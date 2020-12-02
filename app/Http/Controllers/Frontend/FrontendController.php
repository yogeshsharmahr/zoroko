<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function features()
    {
        return view('frontend.features');
    }

    public function forpersonal()
    {
        return view('frontend.for-personal');
    }

    public function forbusiness()
    {
        return view('frontend.for-business');
    }

    public function help()
    {
        return view('frontend.help');
    }
}
