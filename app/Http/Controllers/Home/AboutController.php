<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $data;
    public function addAboutSection()
    {
        return view('admin.about-section.add');
    }
    public function saveAboutSection(Request $request)
    {
        About::saveAbout($request);
        return redirect()->back()->with('massage','Save successful');
    }
    public function manageAboutSection()
    {
        $this->data = About::all();
        return view('admin.about-section.manage',['datas'=>$this->data]);
    }

    public function editAboutSection($id)
    {
        $this->data = About::find($id);
        return view('admin.about-section.edit',['data'=>$this->data]);
    }

    public function updateAboutSection(Request $request, $id)
    {
        About::updateAbout($request,$id);
        return redirect('/admin/manage-about-section')->with('massage','Update successful');
    }

    public function aboutMultiImage()
    {
        return view('admin.about-section.multi-image');
    }
    public function saveMultiImage()
    {
        return view('admin.about-section.multi-image');
    }
}
