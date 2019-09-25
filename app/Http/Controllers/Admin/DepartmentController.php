<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Http\Requests\DepartmentStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return view('admin.departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  DepartmentStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentStoreRequest $request)
    {
        $department = new Department();
        $department->setAttribute('name', $request->input('name'));
        $department->setAttribute('code', $request->input('code'));
        $department->save();

        return response()->redirectToRoute('departments.index');
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
    public function edit(Department $department)
    {
        return view('admin.departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Department $department ,Request $request)
    {
        
        $department->setAttribute('name', $request->input('name'));
        $department->setAttribute('code', $request->input('code'));
        $department->save();

        return response()->redirectToRoute('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Department $department)
    {
        return view('admin.departments.delete', compact('department'));
    }

    public function destroy(Department $department, Request $request){
        $department->delete();
        return response()->redirectToRoute('departments.index');
    }
}
