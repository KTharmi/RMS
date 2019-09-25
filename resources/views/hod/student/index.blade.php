@extends('hod.app')
@section('main-contend')
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Assign Students</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
              @include('includes\messages')
            <!-- /.box-header -->
            
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Student Name</th>
                  <th>Student RegNo</th>
                  <th>level</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $student->name }}</td>
                  <td>{{ $student->register_no }}</td>
                  <td>{{ $student->level }}</td>
                  <td><a href="{{ route('student.edit', $student->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>S.NO</th>
                  <th>Student Name</th>
                  <th>Student RegNo</th>
                  <th>level</th>
                  <th>Edit</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>
         
@endsection
