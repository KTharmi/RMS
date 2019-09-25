@extends('admin.app')
@section('main-contend')
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Students Table With Full Features</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
              @include('includes\messages')
            <!-- /.box-header -->
            <a href="{{ route('students.create') }}" class="btn btn-success col-lg-offset ">Create</a>
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Student Name</th>
                  <th>Index No</th>
                  <th>Reg No</th>
                  <th>YOS</th>
                  <th>Level</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $student->name }}</td>
                  <td>{{ $student->index_no }}</td>
                  <td>{{ $student->register_no }}</td>
                  <td>{{ $student->yos }}</td>
                  <td>{{ $student->level }}</td>
                  <td><a href="{{ route('students.edit', $student->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="{{ route('students.delete', $student->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                 @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.NO</th>
                  <th>Student Name</th>
                  <th>Index No</th>
                  <th>Reg No</th>
                  <th>YOS</th>
                  <th>Level</th>
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
