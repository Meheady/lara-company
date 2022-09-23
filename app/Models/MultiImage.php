<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static $multiImage;
    protected static $imgExt;
    protected static $imgName;
    protected static $imgLocation;
    protected static $imgUrl;
    protected static $newMultiImg;

    public static function saveMultiImage($request)
    {

        self::$multiImage = $request->file('multi_image');



        $i = 0;
        foreach (self::$multiImage as $singleImg){
            self::$imgExt = $singleImg->getClientOriginalExtension();
            self::$imgName = time().$i.'.'.self::$imgExt;
            self::$imgLocation = 'multi-image/';
            $singleImg->move(self::$imgLocation,self::$imgName);
            self::$imgUrl = self::$imgLocation.self::$imgName;
            self::$newMultiImg = new MultiImage();
            self::$newMultiImg->multi_image = self::$imgUrl;
            self::$newMultiImg->save();
            $i++;
        }

    }

    public static function updateMultiImage($request,$id)
    {
        self::$multiImage = $request->file('multi_image');
        self::$newMultiImg = MultiImage::find($id);

        unlink(self::$newMultiImg->multi_image);
        self::$imgExt = self::$multiImage->getClientOriginalExtension();
        self::$imgName = time().'.'.self::$imgExt;
        self::$imgLocation = 'multi-image/';
        self::$multiImage->move(self::$imgLocation,self::$imgName);
        self::$imgUrl = self::$imgLocation.self::$imgName;

        self::$newMultiImg->multi_image = self::$imgUrl;
        self::$newMultiImg->save();


    }
}
