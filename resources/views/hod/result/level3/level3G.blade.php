@extends('lecturer.app')
@section('main-contend')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">3G Result</h3>
            </div>

    </section>

    <!-- Main content -->
    <section class="content">
              @include('includes\messages')
            <!-- /.box-header -->
            <a href="#" class="btn btn-success col-lg-offset ">Create</a>
            <p align="right">
            <a href="#" class="btn btn-success col-lg-offset ">Type1</a>
            <a href="#" class="btn btn-success col-lg-offset ">Type2</a>
            <a href="#" class="btn btn-success col-lg-offset ">Type3</a>
            <a href="#" class="btn btn-success col-lg-offset ">Type4</a>
            </p>
            <div class="box-body card">
                <table id="example1" class="table table-bordered">
                    <thead>
                    <tr>
                      <th>Student RegNo</th>
                      <th>Student Name</th>
                      <th>IndexNo</th>
                      <th>Course Code</th>
                      <th>Course Name</th>
                      <th>FinalECE</th>
                      <th>Grade</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach($departments as $department)
                      <tr>
                      <td>{{ $loop->index +1 }}</td>
                      <td>{{ $department->name }}</td>
                      <td>{{ $department->code }}</td>
                      <td><a href="{{ route('departments.edit', $department->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                      <td><a href ="{{route('departments.delete', $department->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                      </tr>
                      @endforeach
                    </tbody> --}}
                    <tfoot>
                    <tr>
                      <th>Student RegNo</th>
                      <th>Student Name</th>
                      <th>IndexNo</th>
                      <th>Course Code</th>
                      <th>Course Name</th>
                      <th>FinalECE</th>
                      <th>Grade</th>
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
