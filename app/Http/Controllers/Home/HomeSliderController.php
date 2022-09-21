<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{

    protected $heroSectionData;
    protected $heroSection;

    public function addHeroSection()
    {
        return view('admin.hero-section.add');
    }
    public function saveHeroSection(Request $request)
    {
        HomeSlider::newHeroSection($request);
        return redirect()->back()->with('massage','Save Success');
    }
    public function manageHeroSection()
    {
        $this->heroSectionData = HomeSlider::all();
        return view('admin.hero-section.manage',['heroSectionDatas'=>$this->heroSectionData]);
    }
    public function editHeroSection($id)
    {

        $this->heroSection = HomeSlider::find($id);
        return view('admin.hero-section.edit',['data'=>$this->heroSection]);
    }
    public function updateHeroSection(Request $request, $id)
    {
        HomeSlider::updateHeroSection($request,$id);
        return redirect('/admin/manage-hero-section')->with('massage','Update Success');
    }
}
