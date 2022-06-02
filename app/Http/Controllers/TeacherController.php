<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $teachers = Teacher::latest()->get();
        return view('admin.teacher.index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $groups = Group::all();
        return view('admin.teacher.create')->with('groups', $groups);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Teacher::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'specialization'=>$request->specialization,
            'group_id'=>$request->group_id,
            'phone'=>$request->phone
        ]);
        return redirect(route('teacher.index'))->with('success','Teacher created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Teacher $teacher)
    {
        $groups = Group::all();
        return view('admin.teacher.edit')->with('groups',$groups)->with('teacher', $teacher);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher = Teacher::find($teacher->id);
        $teacher->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'specialization'=>$request->specialization,
            'group_id'=>$request->group_id,
            'phone'=>$request->phone
        ]);
        return redirect(route('teacher.index'))->with('success','Teacher updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Teacher $teacher)
    {
        $teacher = Teacher::find($teacher->id);
        $teacher->delete();
        return redirect(route('teacher.index'))->with('success','Teacher deleted');
    }
}
