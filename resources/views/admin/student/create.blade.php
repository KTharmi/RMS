@extends('admin.app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Add New Student</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <h3>Create Student</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open()->route('students.store') !!}
                    {!! Form::text('name', 'Name')->placeholder('enter the Student name') !!}
                    {!! Form::text('register_no', 'Reg-No')->placeholder('enter the Registration number') !!}
                    {!! Form::text('index_no', 'Index_No')->placeholder('enter the Index number') !!}
                    {!! Form::text('yos', 'YOS')->placeholder('enter the Year of Studies') !!}
                    {!!Form::select('level', 'Choose your Level', ['1G'=>'1G', '1S'=>'1S','2G'=>'2G','2S'=>'2S','3M'=>'3M','3S'=>'3S','4S'=>'4S','4M'=>'4M','4S'=>'4S'])!!}
                    {!! Form::submit("Add") !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>
@endsection