<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\HomeSlider;
use App\Models\MultiImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $multiImg;
    public function ShowHeroSection()
    {
        $this->multiImg = MultiImage::all();
        return view('website.index',['heroSection'=>HomeSlider::find(1),'multiImg'=>$this->multiImg]);
    }

    public function showAboutPage()
    {
        $this->multiImg = MultiImage::all();
        return view('website.about-page.about',['aboutPage'=>About::find(1),'multiImg'=>$this->multiImg]);
    }
}
