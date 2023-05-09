<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    protected $file;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.file.index',[
            'files' => File::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.file.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        File::fileControl($request);
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
        $this->file = File::find($id);


        if (file_exists($this->file->image))
        {
            unlink($this->file->image);
        }
        $this->file->delete();
        return redirect()->back()->with('success','Product delete Successfully.');
    }
}
