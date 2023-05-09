<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Member;
use Illuminate\Http\Request;
use function Termwind\ValueObjects\p;

class MemberController extends Controller
{
    protected $member;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.Member.index',[
            'members' => Member::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.Member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Member::createOrUpdateMember($request);
        return back()->with('success', 'Member created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('back.Member.show',[
            'member'=>$member,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('back.Member.edit',[
            'member' => Member::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->member = Member::find($id);
        Member:: createOrUpdat($request , $id);
        return redirect('/members')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $this->member = Member::find($id);
        $this->member->delete();
        return back()->with('success', 'Course deleted successfully.');

    }
}
