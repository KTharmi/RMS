@extends('admin.app')
@section('main-contend')
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Lecturer Table With Full Features</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
              @include('includes\messages')
            <!-- /.box-header -->
            <a href="{{ route('lecturers.create') }}" class="btn btn-success col-lg-offset ">Create</a>
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Lecturer Name</th>
                  <th>Emp ID</th>
                  <th>Department name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($lecturers as $lecturer)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $lecturer->name }}</td>
                  <td>{{ $lecturer->emp_id }}</td>
                  <td>{{ $lecturer->dept_id }}</td>
                  <td><a href="{{ route('lecturers.edit', $lecturer->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="{{ route('lecturers.delete', $lecturer->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.NO</th>
                  <th>Lecturer Name</th>
                  <th>Emp ID</th>
                  <th>Department Name</th>
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
