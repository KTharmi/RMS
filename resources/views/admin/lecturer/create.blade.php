@extends('admin.app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Add New Lecturer</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <h3>Create Lecturer</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open()->route('lecturers.store') !!}
                    {!! Form::text('name', 'Name')->placeholder('enter the lecture name') !!}
                    {!! Form::text('emp_id', 'Emp-id')->placeholder('enter the employee code') !!}
                    {!! Form::select( 'dept_id','Choose your Department', $departments ?? []) !!}
                    {!! Form::select( 'is_hod','Hod ', [ 1=>'Yes', 2=>'No']) !!}
                    {!!Form::text('user_id', 'User-Id')!!}
                    <h6><b>Currentlly work In</b></h6>
                    {!! Form::checkbox('is_active', 'Yes') !!}
                    {!! Form::submit("Add") !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>
@endsection