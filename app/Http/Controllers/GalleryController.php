<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    protected $pic;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.gallery.index',[
            'p'=>Gallery::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gallery::addPicture($request);
        return back()->with('success','Picture Add  Successfully');
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
        $this->pic = Gallery::find($id);


        if (file_exists($this->pic->image))
        {
            unlink($this->pic->image);
        }
        $this->pic->delete();
        return redirect()->back()->with('success','Product delete Successfully.');
    }
}
