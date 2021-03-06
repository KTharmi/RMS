@extends('admin.app')
@section('main-contend')
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">User Table </h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
              @include('includes\messages')
            <!-- /.box-header -->
            <a href="{{ route('users.create') }}" class="btn btn-success col-lg-offset ">Create</a>
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $user->username }}</td>
                  <td>{{ $user->email }}</td>
                  <td><a href="{{ route('users.edit', $user->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href ="{{route('users.delete', $user->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                  </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.NO</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>
         
@endsection
