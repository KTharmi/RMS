<?php

namespace App\Http\Controllers\Hod;

use App\Subject;
use App\Http\Requests\SubjectStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();;
        return view('hod.syllabus.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hod.syllabus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SubjectStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubjectStoreRequest $request)
    {
        $subject = new Subject();
        $subject->setAttribute('course_name', $request->input('course_name'));
        $subject->setAttribute('course_code', $request->input('course_code'));
        $subject->setAttribute('credit', $request->input('credit'));
        $subject->setAttribute('level', $request->input('level'));
        $subject->setAttribute('semester', $request->input('semester'));  
       // $subject->setAttribute('is_active', $request->input('is_active'));
        $subject->save();

        return response()->redirectToRoute('syllabus.index');
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
    public function edit(Subject $subject)
    {
        return view('hod.syllabus.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Subject $subject , Request $request)
    {
        $subject->setAttribute('course_name', $request->input('course_name'));
        $subject->setAttribute('course_code', $request->input('course_code'));
        $subject->setAttribute('level', $request->input('level'));
        $subject->setAttribute('semester', $request->input('semester'));
        $subject->setAttribute('credit', $request->input('credit'));
         // $subject->setAttribute('is_active', $request->input('is_active'));
        $subject->save();

        return response()->redirectToRoute('syllabus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Subject $subject )
    {
        return view('hod.syllabus.delete', compact('subject'));
    }

    public function destroy(Subject $subject, Request $request )
    {
        $subject->delete();
        return response()->redirectToRoute('syllabus.index');
    }
}
