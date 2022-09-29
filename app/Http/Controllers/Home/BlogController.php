<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blog;
    protected $category;

    public function manageBlog()
    {
        $this->blog = Blog::all();
        return view('admin.blog.manage',['datas'=>$this->blog]);
    }

    public function addBlog()
    {
        $this->category = BlogCategory::all();

        return view('admin.blog.add',['category'=>$this->category]);

    }

    public function saveBLog(Request $request)
    {
        Blog::saveBLog($request);
        return redirect()->route('manage.blog')->with('massage','save successful');
    }

    public function editBlog($id)
    {
        $this->blog = Blog::find($id);
        $this->category = BlogCategory::orderBy('blog_category','ASC')->get();
        return view('admin.blog.edit',['blog'=>$this->blog,'category'=>$this->category]);
    }

    public function updateBlog(Request $request, $id)
    {
        Blog::updateBLog($request,$id);
        return redirect()->route('manage.blog')->with('massage','Save successful');
    }
}
