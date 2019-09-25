@extends('hod.app')
@section('main-contend')
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Syllabus Table With Full Features</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
              @include('includes\messages')
            <!-- /.box-header -->
            <a href="{{ route('syllabus.create') }}" class="btn btn-success col-lg-offset ">Create</a>
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Course Code</th>
                  <th>Course Name</th>
                  <th>Credit</th>
                  <th>Level</th>
                  <th>semester</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($subjects as $subject)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $subject->course_code }}</td>
                  <td>{{ $subject->course_name }}</td>
                  <td>{{ $subject->credit }}</td>
                  <td>{{ $subject->level }}</td>
                  <td>{{ $subject->semester }}</td>
                  <td><a href="{{ route('syllabus.edit', $subject->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href ="{{route('syllabus.delete', $subject->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>S.NO</th>
                  <th>Course Code</th>
                  <th>Course Name</th>
                  <th>Credit</th>
                  <th>Level</th>
                  <th>semester</th>
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
