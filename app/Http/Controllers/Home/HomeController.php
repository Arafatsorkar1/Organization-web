<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Current;
use App\Models\Future;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('front.home.home',[
            'Future' => Future::all(),
            'current' => Current::all(),
        ]);
    }



    public function runningProject($id)
    {
        return view('front.home.runningProject',[
            'run' => Current::find($id)
        ]);
    }


    public function futureProject($id)
    {
        return view('front.home.futureProject',[
            'content' => Future::find($id)
        ]);
    }






    public function activity()
    {
        return view('front.activities.education');
    }

    public function health()
    {
        return view('front.activities.health');
    }

    public function ict()
    {
        return view('front.activities.ict');
    }



    public  function MajorObjectives()
    {
        return view('front.work.major');
    }


    public  function WorkingAria()
    {
        return view('front.work.works');
    }


    public  function Beneficiaries()
    {
        return view('front.work.Beneficiaries');
    }


    public  function Monitoring()
    {
        return view('front.work.Monitoring');
    }
}
