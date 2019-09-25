@extends('admin.app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Edit A lecturer</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <h3>Edit Lecturer</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open()->route('lecturers.update', ['lecturer' => $lecturer->id])->patch()->fill($lecturer) !!}
                    {!! Form::text('name', 'Name') !!}
                    {!! Form::text('emp_id', 'Emp-Id') !!}
                    {!! Form::select( 'dept_id','Select your Department', $departments ?? []) !!}
                    {!! Form::select( 'is_hod','Hod ', [ 1=>'Yes', 2=>'No']) !!}
                    <!-- {!! Form::text('is_hod') !!} -->
                    {!! Form::submit("Update") !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>
@endsection