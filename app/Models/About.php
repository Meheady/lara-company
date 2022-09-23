<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $guarded= [];

    protected static $aboutData;
    protected static $imgExt;
    protected static $imgName;
    protected static $location;
    protected static $imgUrl;



    public static function saveAboutImage($image)
    {
        self::$imgExt = $image->getClientOriginalExtension();
        self::$imgName = time().'.'.self::$imgExt;
        self::$location = 'about-image/';
        $image->move(self::$location,self::$imgName );
        return self::$imgUrl = self::$location.self::$imgName;
    }

    public static function saveAbout($request)
    {
        self::$aboutData = new About();

        self::$aboutData->title = $request->title;
        self::$aboutData->short_title = $request->short_title;
        self::$aboutData->short_desc = $request->short_desc;
        self::$aboutData->long_desc = $request->long_desc;
        self::$aboutData->about_image = self::saveAboutImage($request->file('about_image'));
        self::$aboutData->save();
    }

    public static function updateAbout($request,$id)
    {
        self::$aboutData = About::find($id);

        if ($request->file('about_image')){
            unlink(self::$aboutData->about_image);
            self::$aboutData->title = $request->title;
            self::$aboutData->short_title = $request->short_title;
            self::$aboutData->short_desc = $request->short_desc;
            self::$aboutData->long_desc = $request->long_desc;
            self::$aboutData->about_image = self::saveAboutImage($request->file('about_image'));
            self::$aboutData->save();
        }
        else {
            self::$aboutData->title = $request->title;
            self::$aboutData->short_title = $request->short_title;
            self::$aboutData->short_desc = $request->short_desc;
            self::$aboutData->long_desc = $request->long_desc;
            self::$aboutData->save();
        }
    }
}
