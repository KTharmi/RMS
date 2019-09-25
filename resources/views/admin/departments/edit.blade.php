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
                    {!! Form::open()->route('departments.update', ['department' => $department->id])->patch()->fill($department) !!}
                    {!! Form::text('name', 'Name') !!}
                    {!! Form::text('code', 'Code') !!}
                    {!! Form::submit("Update") !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>
@endsection