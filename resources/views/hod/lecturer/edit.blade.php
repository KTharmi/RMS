@extends('hod.app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Edit to the lecturer </h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <h3>Edit Lecturer </h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open()->route('lecturer.update', ['lecturer' => $lecturer->id])->patch()->fill($lecturer) !!}
                    {!! Form::text('name', 'Lecturer Name')->readonly() !!}
                    {!! Form::text('emp_id', 'Lecturer id')->readonly() !!}
                    {!!Form::select('is_active', 'Currentlly work in', [ 1=>'Yes', 2=>'No'])!!}
                    {!! Form::submit("Update") !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>
@endsection