<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\HomeSlider;
use App\Models\MultiImage;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $multiImg;
    protected $portfolio;
    public function ShowHeroSection()
    {
        $this->multiImg = MultiImage::all();
        $this->portfolio = Portfolio::all();

        return view('website.index', ['heroSection'=>HomeSlider::find(1),
            'multiImg'=>$this->multiImg,
                'portfolio'=>$this->portfolio,
            'blogs'=>Blog::latest()->limit(3)->get()
            ]);
    }

    public function showAboutPage()
    {
        $this->multiImg = MultiImage::all();
        return view('website.about-page.about',['aboutPage'=>About::find(1),'multiImg'=>$this->multiImg]);
    }

    public function showPortfolioPage()
    {
        $this->portfolio = Portfolio::all();
        return view('website.portfolio-page.portfolio',['portfolioPage'=>$this->portfolio]);
    }

    public function showPortfolioDetails($id)
    {$this->multiImg = MultiImage::all();
        $this->portfolio = Portfolio::find($id);
        return view('website.portfolio-page.portfolio-detail',['portfolioPage'=>$this->portfolio,'multiImg'=>$this->multiImg]);
    }

    public function showBlogDetails($id)
    {
        $blog = Blog::find($id);
        $blogs = Blog::latest()->limit(6)->get();
        $categories = BlogCategory::latest()->get();
        return view('website.blog.details',['blog'=>$blog,'blogs'=>$blogs,'categories'=>$categories]);
    }
}
