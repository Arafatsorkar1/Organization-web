<?php

namespace App\Http\Controllers;

use App\Models\Assesment;
use Illuminate\Http\Request;

class AssesmentController extends Controller
{
    protected $into;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.assesment.index',[
            'gets' =>Assesment::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.assesment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Assesment::addasses($request);
        return back()->with('success','File Add  Successfully');
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
        $this->into = Assesment::find($id);


        if (file_exists($this->into->image))
        {
            unlink($this->into->image);
        }
        $this->into->delete();
        return redirect()->back()->with('success','Product delete Successfully.');
    }
}
