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
                    <th>ICA 1</th>
                    <th>ICA 2</th>
                    <th>ICA 3</th>
                    <th>MIC</th>
                  </thead>
                  <tbody>
                  @foreach($icas as $ica)
                  <tr>
                  <td>{{ $loop->index +1 }} </td>
                  <td>{{ $ica->student->name }}</td>
                  <td>{{ $ica->ica1 }}</td>
                  <td>{{ $ica->ica2 }}</td>
                  <th>{{ $ica->ica3 }}</th>
                  <th>{{ $ica->mark }}</th>
                  </tr>
                  @endforeach
                  </tbody>
              </table>
             
            </div>
            <!-- /.box-body -->
            </section>
          </div>

@endsection
