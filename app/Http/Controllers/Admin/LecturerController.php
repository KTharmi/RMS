<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Lecturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturers = Lecturer::all();
        $departments =Department::all();
        return view('admin.lecturer.index', compact('lecturers','departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::get()->pluck('code','id')->toArray();
        return view('admin.lecturer.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lecturer = new Lecturer();
        $lecturer->setAttribute('name', $request->input('name'));
        $lecturer->setAttribute('emp_id', $request->input('emp_id'));
        $lecturer->setAttribute('dept_id', $request->input('dept_id'));
        $lecturer->setAttribute('is_hod', $request->input('is_hod'));
        $lecturer->save();

        return response()->redirectToRoute('lecturers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturer $lecturer)
    {
        $departments=Department::get()->pluck('code','id')->toArray();
        return view('admin.lecturer.edit', compact('lecturer','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Lecturer $lecturer , Request $request )
    {
        $lecturer->setAttribute('name', $request->input('name'));
        $lecturer->setAttribute('dept_id', $request->input('dept_id'));
        $lecturer->setAttribute('emp_id', $request->input('emp_id'));
        $lecturer->setAttribute('is_hod', $request->input('is_hod'));
        $lecturer->save();

        return response()->redirectToRoute('lecturers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Lecturer $lecturer)
    {
        return view('admin.lecturer.delete', compact('lecturer'));
    }

    public function destroy(Lecturer $lecturer, Request $request){
        $lecturer->delete();
        return response()->redirectToRoute('lecturers.index');
    }
}
