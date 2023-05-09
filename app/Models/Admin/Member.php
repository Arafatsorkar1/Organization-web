<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public static $member;

    public static function createOrUpdateMember($request)
    {



        self::$member = new Member();

        self::$member->session      = $request->session;
        self::$member->occopetation = $request->occopetation;
        self::$member->trainee_Name = $request->trainee_Name;
        self::$member->designation  = $request->designation;
        self::$member->name         = $request->name;
        self::$member->address      = $request->address;
        self::$member->country      = $request->country;
        self::$member->from         = $request->from;
        self::$member->to           = $request->to;
        self::$member->mobile       = $request->mobile;
        self::$member->type         = $request->type;
        self::$member->reg          = $request->reg;
        self::$member->assessment   = $request->assessment;
        self::$member->income       = $request->income;

        self::$member->save();

    }



    public static function createOrUpdat($request , $id)
    {


        self::$member = Member::find($id);





        self::$member->session = $request->session;
        self::$member->occopetation = $request->occopetation;
        self::$member->trainee_Name = $request->trainee_Name;
        self::$member->designation = $request->designation;
        self::$member->name = $request->name;
        self::$member->address = $request->address;
        self::$member->country = $request->country;
        self::$member->from = $request->from;
        self::$member->to = $request->to;
        self::$member->mobile = $request->mobile;
        self::$member->type = $request->type;
        self::$member->reg = $request->reg;
        self::$member->assessment = $request->assessment;
        self::$member->income = $request->income;

        self::$member->save();

    }

}
