<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public  static $picture;
    protected static $productImage,$imageName,$imageDirectory,$imageUrl;

    public static function addPicture($request)
    {
        self::$productImage = $request->file('image');
        self::$imageName = rand(10,1000).'.'.self::$productImage->getClientOriginalExtension();
        self::$imageDirectory = 'backend/img/Gallery/';
        self::$productImage->move(self::$imageDirectory, self::$imageName);
        self::$imageUrl = self::$imageDirectory.self::$imageName;

        self::$picture = new Gallery();
        self::$picture->image = self::$imageUrl;
        self::$picture->save();
    }
}
