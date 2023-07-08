<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin\Member;
use Dotenv\Validator;
use http\Env\Response;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public  function index()
    {
        $member = Member::all();
        if ($member->count()> 0){
            return response()->json([
                'status' => 200 ,
                'member' => $member
            ],200);
        }
        else{
            return  response()->json([
                'status' => 404,
                'message' => 'not found'
            ],404);
        }
    }
    public  function  store(Request $request)
    {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'session' => 'required | max:100',
            'occopetation' => 'required | max:100',
            'trainee_Name' => 'required | max:100',
            'designation' => 'required | max:100',
            'name' => 'required | max:100',
            'address' => 'required | max:100',
            'country' => 'required | max:100',
            'from' => 'required | max:100',
            'to' => 'required | max:100',
            'mobile' => 'required | max:100',
            'type' => 'required | max:100',
            'reg' => 'required | max:100',
            'assessment' => 'required | max:100',
            'income' => 'required | max:100',
        ]);
        if ($validator->fails()){
            return response()->json([
               'status' => 422,
                'errors'=>$validator->messages()
            ],422);
        }
        else{
            $member=  Member::createOrUpdateMember($request);
//            $member = Member::create([
////                'session' => $request->session,
//                'occopetation' => $request->occopetation,
//                'trainee_Name' => $request->trainee_Name,
//                'designation' => $request->designation,
//                'name' => $request->name,
//                'address' => $request->address,
//                'country' => $request->country,
//                'from' => $request->from,
//                'to' => $request->to,
//                'mobile' => $request->mobile,
//                'type' => $request->type,
//                'reg' => $request->reg,
//                'assessment' => $request->assessment,
//                'income' => $request->income,
//            ]);
            if ($member)
            {
                return response()->json([
                    'status' => 200,
                    'message'=> "ok done"
            ],200);
            }
            else{
                return response()->json([
                    'status' => 500,
                    'message'=> "not ok"
                ],500);
            }
        }


    }
}
