@extends('lecturer.app')
@section('main-contend')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">@yield('title')</h3>
            </div>

    </section>

    <!-- Main content -->
    <section class="content">
              @include('includes\messages')
            <!-- /.box-header -->
            <!-- <a href="#" class="btn btn-success col-lg-offset ">Create</a> -->
            {!! Form::open() !!}
            {!! Form::text('course_code', 'Course Code') !!}
            {!! Form::text('lect_id', 'Lecturer') !!}
            {!! Form::text('level', 'level') !!}
            {!! Form::text('yos', 'year') !!}
            {!! Form::submit("Update") !!}
            {!! Form::close() !!}

            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>No</th>
                  <th>Student IndexNo</th>
                  <th>Student RegNo</th>
                  <th>Student Name</th>
                  <th>MIC</th>
                  <th>MEC</th>
                  <th>FINAL</th>
                  <th>GRADE</th>
                  </thead>
                  <tbody>
                  @foreach($finals as $final)
                  <tr>
                  <td>{{ $loop->index +1 }} </td>
                  <td>{{ $final->student->index_no }}</td>
                  <td>{{ $final->student->register_no}}</td>
                  <td>{{ $final->student->name}}</td>
                  <th>{{ $final->mic }}</th>
                  <th>{{ $final->mec}}</th>
                  <th>{{ $final->mark}}</th>
                  <th>{{ $final->grade}}</th>
                  </tr>
                  @endforeach
                  </tbody>
              </table>
             
            </div>
            <!-- /.box-body -->
            </section>
          </div>

@endsection
