<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;

    protected $guarded = [];

//    protected $fillable = [
//        'title',
//        'short_title',
//        'slide_image',
//        'video_url'
//    ]

    protected static $heroData;
    protected static $imageName;
    protected static $extension;
    protected static $directory;
    protected static $imgUrl;


    public static function getImageUrl($image)
    {
        self::$extension = $image->getClientOriginalExtension();
        self::$imageName = time().'.'. self::$extension;
        self::$directory = 'hero-section-photo/';
        $image->move(self::$directory, self::$imageName);
        return self::$imgUrl =  self::$directory.self::$imageName;
    }


    public static function newHeroSection($request)
    {
        self::$heroData = new HomeSlider();
        self::$heroData->title = $request->title;
        self::$heroData->short_title = $request->short_title;
        self::$heroData->video_url = $request->video_url;
        self::$heroData->slide_image = self::getImageUrl($request->file('hero_image'));
        self::$heroData->save();
    }
    public static function updateHeroSection($request,$id)
    {
        self::$heroData = HomeSlider::find($id);

        if ($request->file('hero_image')){
            unlink(self::$heroData->slide_image);

            self::$heroData->slide_image = self::getImageUrl($request->file('hero_image'));
            self::$heroData->title = $request->title;
            self::$heroData->short_title = $request->short_title;
            self::$heroData->video_url = $request->video_url;
            self::$heroData->save();
        }
        else{
            self::$heroData->title = $request->title;
            self::$heroData->short_title = $request->short_title;
            self::$heroData->video_url = $request->video_url;
            self::$heroData->save();
        }
    }
}
