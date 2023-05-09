<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Future;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class FuturProjectController extends Controller
{
    protected $project;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.FutureProject.index',[
            'Projects' =>Future::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.FutureProject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {




        Future::createOrUpdateProject($request);
        return back()->with('success','Project Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->project = Future::findOrFail($id);
        return view('back.FutureProject.show',[
            'project' => $this->project,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        return view('back.FutureProject.edit',[
            'projects'=> Future::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->project = Future::find($id);
        Future:: createOrUpdat($request , $id);
        return redirect('/FutureProjects')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $this->project = Future::find($id);


        if (file_exists($this->project->image))
        {
            unlink($this->project->image);
        }
        $this->project->delete();
        return redirect()->back()->with('success','Product delete Successfully.');


    }
}
