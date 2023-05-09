<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Helper;

class Future extends Model
{
    use HasFactory;
    public static $future;
    protected static $productImage,$imageName,$imageDirectory,$imageUrl;

//    protected $fillable=['Name','short','long','image'];
//
//
//    public  static function createOrUpdateProject($request ,$id = null)
//    {
//        Future::updateOrCreate(['id' => $id], [
//
//            'Name' =>$request->name,
//            'short'=>$request->short,
//            'long' =>$request->long,
//            'image'=>isset($id) ? Helper::uploadFile($request->file('image'), 'FutureProjects-image',Future::find($id)->image) :Helper::uploadFile($request->file('image'), 'FutureProjects-image' ),
//        ]);


public static function createOrUpdateProject($request)
{

    self::$productImage = $request->file('image');
    self::$imageName = rand(10,1000).'.'.self::$productImage->getClientOriginalExtension();
    self::$imageDirectory = 'backend/img/';
    self::$productImage->move(self::$imageDirectory, self::$imageName);
    self::$imageUrl = self::$imageDirectory.self::$imageName;



        self::$future= new Future();

        self::$future->name = $request->name;
        self::$future->short = $request->short;
        self::$future->long = $request->long;
        self::$future->image =    self::$imageUrl ;
        self::$future->save();
    }

    public  static function createOrUpdat($request , $id)
    {


        self::$future= Future::find($id);


        self::$productImage = $request->file('image');
        if (self::$productImage)
        {
            if (file_exists(self::$future->image))
            {
                unlink(self::$future->image);
            }

            self::$productImage = $request->file('image');
            self::$imageName = rand(10,1000).'.'.self::$productImage->getClientOriginalExtension();
            self::$imageDirectory = 'backend/img/';
            self::$productImage->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;

        }
        else{
            self::$imageUrl = self::$future->image;
        }



        self::$future->name = $request->name;
        self::$future->short = $request->short;
        self::$future->long = $request->long;
        self::$future->image =    self::$imageUrl ;
        self::$future->save();

    }
}
