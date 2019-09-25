<?php

namespace App\Http\Controllers\Admin;

use App\Student;
use App\Http\Requests\StudentStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StudentStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentStoreRequest $request)
    {
        $student = new Student();
        $student->setAttribute('name', $request->input('name'));
        $student->setAttribute('register_no', $request->input('register_no'));
        $student->setAttribute('index_no', $request->input('index_no'));
        $student->setAttribute('yos', $request->input('yos'));
        $student->setAttribute('level', $request->input('level'));
        $student->save();

        return response()->redirectToRoute('students.index');
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
    public function edit(Student $student)
    {
        return view('admin.student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Student $student ,Request $request)
    {
        $student->setAttribute('name', $request->input('name'));
        $student->setAttribute('register_no', $request->input('register_no'));
        $student->setAttribute('index_no', $request->input('index_no'));
        $student->setAttribute('yos', $request->input('yos'));
        $student->setAttribute('level', $request->input('level'));
        $student->save();

        return response()->redirectToRoute('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Student $student)
    {
        return view('admin.student.delete', compact('student'));
    }

    public function destroy(Student $student ,Request $request)
    {
        $student->delete();
        return response()->redirectToRoute('students.index');
    }
}
