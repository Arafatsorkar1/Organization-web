<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cirtificat extends Model
{
    use HasFactory;
    public  static $cirt;
    protected static $productImage,$imageName,$imageDirectory,$imageUrl;

    public static function addpaper($request)
    {
        self::$productImage = $request->file('pdf');
        self::$imageName = rand(10,1000).'.'.self::$productImage->getClientOriginalExtension();
        self::$imageDirectory = 'backend/img/';
        self::$productImage->move(self::$imageDirectory, self::$imageName);
        self::$imageUrl = self::$imageDirectory.self::$imageName;

        self::$cirt = new Cirtificat();
        self::$cirt->name   = $request->name ;
        self::$cirt->pdf    = self::$imageUrl;
        self::$cirt->save();
    }

}
