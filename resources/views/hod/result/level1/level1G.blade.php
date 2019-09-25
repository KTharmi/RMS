@extends('lecturer.app')
@section('main-contend')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">1G Result</h3>
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
                  <th>Student RegNo</th>
                  <th>Student Name</th>
                  <th>IndexNo</th>
                  <th>MIC</th>
                  <th>MEC</th>
                  <th>FinalECE</th>
                  <th>Grade</th>
                  <th>Edit</th>
                </tr>
                </thead>
                {{-- <tbody>
                    @foreach($eces as $ece)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $ece->student_id }}</td>
                  <td>{{ $ece->student->name }}</td>
                  <td>{{ $ece->student->reg_no }}</td>
                  <td>{{ $ece->mic}}</td>
                  <td>{{ $ece->mec}}</td>
                  <td>{{ $ece->final}}</td>
                  <td><a href="{{ route('finals.edit', $department->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  
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
