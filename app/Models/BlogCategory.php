<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $fillable = [];

    protected static $category;


    public static function saveCategory($request)
    {
        self::$category = new BlogCategory();
        self::$category->blog_category = $request->blog_category;
        self::$category->save();
    }
    public static function updateCategory($request,$id)
    {
        self::$category= BlogCategory::find($id);
        self::$category->blog_category = $request->blog_category;
        self::$category->save();
    }
}
