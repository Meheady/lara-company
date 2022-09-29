<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{

    protected $category;
    public function addCategory()
    {
        return view('admin.blog-category.add');
    }
    public function saveCategory(Request $request)
    {
        BlogCategory::saveCategory($request);
        return redirect()->back()->with('massage','Category save success');
    }
    public function manageCategory()
    {
        $this->category = BlogCategory::all();
        return view('admin.blog-category.manage',['category'=>$this->category]);
    }
    public function editCategory($id)
    {
        $this->category = BlogCategory::find($id);

        return view('admin.blog-category.edit',['category'=> $this->category]);
    }
    public function updateCategory(Request $request,$id)
    {
        BlogCategory::updateCategory($request,$id);
        return redirect()->route('manage.category')->with('massage','Update category successful');
    }
    public function deleteCategory($id)
    {
        $this->category = BlogCategory::find($id);
        $this->category->delete();
        return redirect()->route('manage.category')->with('massage','Delete category successful');
    }
}
