<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $majors = Major::all();
        return view('majors.index',compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('majors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create',Major::class);
        $validateData = $request->validate([
            'major_name' => 'required',
            'dean_name' => 'required',
            'total_student' => 'required|min:10|integer',
        ]);

        $major = Major::create($validateData);
        return redirect()->route('majors.index')
            ->with('message',"Add major {$major->major_name} success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function show(Major $major)
    {
        return view('majors.show',compact('major'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function edit(Major $major)
    {
        return view('majors.edit',compact('major'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Major $major)
    {
        $validateData = $request->validate([
            'major_name' => 'required',
            'dean_name' => 'required',
            'total_student' => 'required|min:10|integer',
        ]);

        $major->update($validateData);
        return redirect()->route('majors.show',$major)
            ->with('message',"Edit major {$major->major_name} success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function destroy(Major $major)
    {
        $major->delete();
        return redirect()->route('majors.index')
            ->with('message',"Delete major {$major->major_name} success");
    }
}
