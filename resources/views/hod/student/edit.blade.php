@extends('hod.app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Edit Student level </h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <h3>Edit Student </h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open()->route('student.update', ['student' => $student->id])->patch()->fill($student) !!}
                    {!! Form::text('name', 'Student Name')->readonly() !!}
                    {!! Form::text('register_no', 'Student RegNo')->readonly() !!}
                    {!!Form::select('level', 'Current  level',['null'=>'--choose the level---', '1G', '1S','2G','2S','3M','3S','4S','4M','4S'])!!}
                    {!! Form::submit("Update") !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>
@endsection