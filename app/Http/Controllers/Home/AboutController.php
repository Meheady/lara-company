<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\MultiImage;
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
    public function saveMultiImage(Request $request)
    {
        MultiImage::saveMultiImage($request);
        return redirect()->back()->with('massage','Save successful');
    }

    public function manageMultiImage()
    {
        return view('admin.about-section.manage-multi-image',['multiImage'=>MultiImage::all()]);
    }
    public function editMultiImage($id)
    {
        return view('admin.about-section.edit-multi-image',['multiImage'=>MultiImage::find($id)]);
    }

    public function updateMultiImage(Request $request, $id)
    {

        MultiImage::updateMultiImage($request,$id);
        return redirect()->route('manage.multi.image')->with('massage','Multi Image Save Successful');
    }

    public function deleteMultiImage($id)
    {
        $this->data = MultiImage::find($id);
        unlink($this->data->multi_image);
        $this->data->delete();
        return redirect()->route('manage.multi.image')->with('massage','Multi Image Delete Successful');
    }

}
