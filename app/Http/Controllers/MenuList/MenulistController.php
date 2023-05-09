<?php

namespace App\Http\Controllers\MenuList;

use App\Http\Controllers\Controller;
use App\Models\Admin\Member;
use App\Models\Assesment;
use App\Models\Cirtificat;
use App\Models\File;
use App\Models\Gallery;
use Illuminate\Http\Request;

class MenulistController extends Controller
{
    public  function AboutUs()
    {
        return view('front.work.AboutUs');
    }

    public  function OurManage()
    {
        return view('front.work.OurManage');
    }

    public  function OurOrgan()
    {
        return view('front.work.OurOrgan');
    }

    public  function Occopetion()
    {
        return view('front.Training.Occopetion',[
            'occopetion' => File::latest()->get(),
        ]);
    }

//    train

    public  function Training()
    {
        return view('front.Training.Training');
    }

    public  function Assessment()
    {
        return view('front.Training.Assessment',[
            'assess' =>Assesment::latest()->get()
        ]);
    }

    public  function Certification()
    {
        return view('front.Training.Certification',[
            'certificate' => Cirtificat::latest()->get()
        ]);
    }

//    Train Sub
    public  function Employment()
    {
        return view('front.Training.Employment');
    }

    public  function History()
    {
        return view('front.Training.History');
    }

    public  function Tracking()
    {
        return view('front.Training.Tracking');
    }


    public  function summary()
    {
        return view('front.Training.Summary',[
            'members'=> Member::latest()->get(),
        ]);
    }

    //MenuActivi


    public  function formal()
    {
        return view('front.MenuActivi.formal');
    }


    public  function Education()
    {
        return view('front.MenuActivi.Education');
    }

    public  function Special()
    {
        return view('front.MenuActivi.Special');
    }

    public  function Covid()
    {
        return view('front.MenuActivi.Covid');
    }

    public  function Health()
    {
        return view('front.MenuActivi.Health');
    }


    public  function Mch()
    {
        return view('front.MenuActivi.Mch');
    }


    public  function Prevention()
    {
        return view('front.MenuActivi.Prevention');
    }


    public  function Trafficking()
    {
        return view('front.MenuActivi.Trafficking');
    }

//OurPrograms
    public  function Adolescent()
    {
        return view('front.OurPrograms.Adolescent');
    }

    public  function Development()
    {
        return view('front.OurPrograms.Development');
    }

    public  function Program()
    {
        return view('front.OurPrograms.Program');
    }
    public  function Disables()
    {
        return view('front.OurPrograms.Disables');
    }
    public  function Gallery()
    {
        return view('front.OurPrograms.Gallery',[
            'pictures' => Gallery::all(),
        ]);
    }







}
