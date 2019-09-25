@extends('admin.app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Add New User</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <h3>Create User</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open()->route('users.store') !!}
                    {!! Form::text('username', 'Name')->placeholder('enter the user name') !!}
                    {!! Form::text('email', 'Email')->placeholder('enter the email ') !!}
                    {!! Form::text('password', 'Password')->placeholder('enter the password ') !!}
                    {!!Form::select('role', 'Choose your role', [''=>'--choose your role---', 1=>'Admin', 2=>'Hod',3=>'Lecturer',4=>'student'])!!}
                    {!! Form::submit("Add") !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>
@endsection