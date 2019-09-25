@extends('lecturer.app')
@section('main-contend')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">@yield('title')</h3>
              <h4 class="box-title">@yield('course')</h4>
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
                  <th>No</th>
                  <th>Student IndexNo</th>
                  <th>Student RegNo</th>
                  <th>Student Name</th>
                  <th>MIC</th>
                  <th>MEC</th>
                  <th>FINAL</th>
                  <th>GRADE</th>
                  <th>Edit</th>
                </tr>
                </thead>
                
                <tbody>
                @section('main-table')
                @show
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>

@endsection
