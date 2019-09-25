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
            
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <th>No</th>
                    <th>Student IndexNo</th>
                    <th>Q 1</th>
                    <th>Q 2</th>
                    <th>Q 3</th>
                    <th>Q 4</th>
                    <th>EIC</th>
                  </thead>
                  <tbody>
                  @foreach($eces as $ece)
                  <tr>
                  <td>{{ $loop->index +1 }} </td>
                  <td>{{ $ece->student->name }}</td>
                  <td>{{ $ece->question1}}</td>
                  <td>{{ $ece->question2}}</td>
                  <th>{{ $ece->question3 }}</th>
                  <th>{{ $ece->question4}}</th>
                  <th>{{ $ece->mark}}</th>
                  </tr>
                  @endforeach
                  </tbody>
              </table>
             
            </div>
            <!-- /.box-body -->
            </section>
          </div>

@endsection
