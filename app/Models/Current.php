<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Current extends Model
{
    use HasFactory;
    public  static $current;
    protected static $productImage,$imageName,$imageDirectory,$imageUrl;

  public  static function createOrUpdateProject($request)
{


    self::$productImage = $request->file('image');
    self::$imageName = rand(10,1000).'.'.self::$productImage->getClientOriginalExtension();
    self::$imageDirectory = 'backend/img/';
    self::$productImage->move(self::$imageDirectory, self::$imageName);
    self::$imageUrl = self::$imageDirectory.self::$imageName;

    self::$current = new Current();
    self::$current->name = $request->name ;
    self::$current->short =$request->short;
    self::$current->long = $request->long;
    self::$current->image =  self::$imageUrl;
    self::$current->save();



}

public  static function projectUpdate($request,$id)
{
    self::$current=Current::find($id);

    self::$productImage = $request->file('image');
    if (self::$productImage)
    {
        if (file_exists(self::$current->image))
        {
            unlink(self::$current->image);
        }
        self::$productImage = $request->file('image');
        self::$imageName = rand(10,1000).'.'.self::$productImage->getClientOriginalExtension();
        self::$imageDirectory = 'backend/img/';
        self::$productImage->move(self::$imageDirectory, self::$imageName);
        self::$imageUrl = self::$imageDirectory.self::$imageName;
    }
    else{
        self::$imageUrl = self::$current->image;
    }







    self::$current->name = $request->name ;
    self::$current->short =$request->short;
    self::$current->long = $request->long;
    self::$current->image =  self::$imageUrl;
    self::$current->save();

}

}
