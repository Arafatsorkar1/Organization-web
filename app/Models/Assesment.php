<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assesment extends Model
{
    use HasFactory;

    public  static $call;
    protected static $productImage,$imageName,$imageDirectory,$imageUrl;

    public static function addasses($request)
{

    self::$productImage = $request->file('pdf');
    self::$imageName = rand(10,1000).'.'.self::$productImage->getClientOriginalExtension();
    self::$imageDirectory = 'backend/img/';
    self::$productImage->move(self::$imageDirectory, self::$imageName);
    self::$imageUrl = self::$imageDirectory.self::$imageName;

    self::$call = new Assesment();
    self::$call->name = $request->name ;
    self::$call->pdf = self::$imageUrl;
    self::$call->save();


}
}
