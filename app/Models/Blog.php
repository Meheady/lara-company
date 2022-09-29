<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected static $blog;
    protected static $imgExt;
    protected static $imgName;
    protected static $imgLocation;
    protected static $imgUrl;

    public static function saveImage($image)
    {
        self::$imgExt = $image->getClientOriginalExtension();
        self::$imgName  = time().'.'.self::$imgExt;
        self::$imgLocation = 'blog-image/';
        $image->move(self::$imgLocation,self::$imgName);
        return self::$imgUrl = self::$imgLocation.self::$imgName;
    }

    public static function saveBLog($request)
    {
        self::$blog = new Blog();

        self::$blog->blog_category_id = $request->category;
        self::$blog->blog_title = $request->blog_title;
        self::$blog->blog_desc = $request->blog_desc;
        self::$blog->blog_tags = $request->blog_tags;
        self::$blog->blog_image = self::saveImage($request->file('blog_image'));
        self::$blog->save();
    }
    public static function updateBLog($request,$id)
    {
        self::$blog = Blog::find($id);

        if ($request->file('blog_image')){
            self::$blog->blog_category_id = $request->category;
            self::$blog->blog_title = $request->blog_title;
            self::$blog->blog_desc = $request->blog_desc;
            self::$blog->blog_tags = $request->blog_tags;
            self::$blog->blog_image = self::saveImage($request->file('blog_image'));
            self::$blog->save();
        }
        else{
            self::$blog->blog_category_id = $request->category;
            self::$blog->blog_title = $request->blog_title;
            self::$blog->blog_desc = $request->blog_desc;
            self::$blog->blog_tags = $request->blog_tags;
            self::$blog->save();
        }
    }

    public function category()
    {
       return $this->belongsTo(BlogCategory::class,'blog_category_id','id');
    }
}


