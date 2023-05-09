<?php

namespace App\Http\Controllers;

use App\Models\Current;
use Illuminate\Http\Request;

class CurrentProjectController extends Controller
{
    protected $current;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.CurrentProject.index',[
            'currents' => Current::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.CurrentProject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Current::createOrUpdateProject($request);
        return back()->with('success','Project Create Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->current = Current::findOrFail($id);
        return view('back.CurrentProject.show',[
            'current'=>$this->current
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('back.CurrentProject.edit',[
            'currents' => Current::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->current = Current::find($id);
        Current::projectUpdate($request,$id);
        return redirect('/CurrentProjects')->with('success', 'Course updated successfully.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->current = Current::find($id);

        if (file_exists($this->current->image))
        {
            unlink($this->current->image);
        }
        $this->current->delete();
        return redirect()->back()->with('success','Product delete Successfully.');
    }
}
