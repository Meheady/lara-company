<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function ShowHeroSection()
    {
        return view('website.index',['heroSection'=>HomeSlider::find(1)]);
    }
}
