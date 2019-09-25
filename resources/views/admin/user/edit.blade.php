@extends('admin.app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Edit User</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <h3>Edit User</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open()->route('users.update', ['user' => $user->id])->patch()->fill($user) !!}
                    {!! Form::text('username', 'UserName') !!}
                    {!! Form::text('email', 'email') !!}
                    {!! Form::text('password', 'Password') !!}
                    {!!Form::select('role', 'Choose your role', [''=>'--choose your role---', 1=>'Admin', 2=>'Hod',3=>'Lecturer',4=>'student'])!!}
                    {!! Form::submit("Update") !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>
@endsection