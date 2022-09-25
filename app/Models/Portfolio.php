<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [];


    protected static $portfolio;
    protected static $imgExt;
    protected static $imgName;
    protected static $imgLocation;
    protected static $imgUrl;

    public static function getImage($image)
    {
        self::$imgExt = $image->getClientOriginalExtension();
        self::$imgName = time().'.'.self::$imgExt;
        self::$imgLocation = 'admin/portfolio-image/';
        $image->move(self::$imgLocation,self::$imgName);
        return self::$imgUrl = self::$imgLocation.self::$imgName;
    }
    public static function savePortfolio($request)
    {
        self::$portfolio = new Portfolio();
        self::$portfolio->portfolio_name = $request->portfolio_name;
        self::$portfolio->portfolio_title = $request->portfolio_title;
        self::$portfolio->portfolio_desc = $request->portfolio_desc;
        self::$portfolio->portfolio_image = self::getImage($request->file('portfolio_image'));
        self::$portfolio->save();
    }

    public static function updatePortfolio($request,$id)
    {
        self::$portfolio  = Portfolio::find($id);
        if ($request->file('portfolio_image')){
            self::$portfolio->portfolio_name = $request->portfolio_name;
            self::$portfolio->portfolio_title = $request->portfolio_title;
            self::$portfolio->portfolio_desc = $request->portfolio_desc;
            self::$portfolio->portfolio_image = self::getImage($request->file('portfolio_image'));
            self::$portfolio->save();
        }else{
            self::$portfolio->portfolio_name = $request->portfolio_name;
            self::$portfolio->portfolio_title = $request->portfolio_title;
            self::$portfolio->portfolio_desc = $request->portfolio_desc;
            self::$portfolio->save();
        }
    }
}
