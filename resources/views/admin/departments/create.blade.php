@extends('admin.app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Add New Department</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <h3>Create Department</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open()->route('departments.store') !!}
                    {!! Form::text('name', 'Name')->placeholder('enter the department name') !!}
                    {!! Form::text('code', 'Code')->placeholder('enter the department code') !!}
                    {!! Form::submit("Add") !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>
@endsection