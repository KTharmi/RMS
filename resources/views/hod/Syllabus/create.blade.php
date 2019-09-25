@extends('hod.app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Add New Syllabus</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <h3>Create Syllabus</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open()->route('syllabus.store') !!}
                    {!! Form::text('course_name', 'Course Name')->placeholder('enter the course name') !!}
                    {!! Form::text('course_code', 'Course Code')->placeholder('enter the course code') !!}
                    {!! Form::text('credit', 'Credit')->placeholder('enter the credit') !!}
                    {!!Form::select('level', 'Choose the Level',  ['1G'=>'1G', '1S'=>'1S','2G'=>'2G','2S'=>'2S','3M'=>'3M','3S'=>'3S','4S'=>'4S','4M'=>'4M','4S'=>'4S'])!!}
                    {!!Form::select('semester', 'Choose the Semester', [1,2])!!}
                    {!!Form::select('is_active', 'Choose the  current course', [ 'Yes','No'])!!}
                    {!! Form::submit("Add") !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>
@endsection