<?php

namespace App\Http\Controllers;

use App\Models\Cirtificat;
use Illuminate\Http\Request;

class CirtificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $paper;
    public function index()
    {
        return view('back.Cirtification.index',[
            'paperers'=>Cirtificat::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.Cirtification.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cirtificat::addpaper($request);
        return back()->with('success','Project Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $this->paper = Cirtificat::find($id);

        if (file_exists($this->paper->image))
        {
            unlink($this->paper->image);
        }
        $this->paper->delete();
        return redirect()->back()->with('success','Certificate delete Successfully.');
    }
}
