<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    public  static $file;
    protected static $productImage,$imageName,$imageDirectory,$imageUrl;

    public static function fileControl($request)
    {


        self::$productImage = $request->file('pdf');
        self::$imageName = rand(10,1000).'.'.self::$productImage->getClientOriginalExtension();
        self::$imageDirectory = 'backend/img/';
        self::$productImage->move(self::$imageDirectory, self::$imageName);
        self::$imageUrl = self::$imageDirectory.self::$imageName;

        self::$file = new File();
        self::$file->name = $request->name ;
        self::$file->pdf = self::$imageUrl;
        self::$file->save();


    }
}
