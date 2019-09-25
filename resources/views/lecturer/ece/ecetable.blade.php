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
           
            <div class="box-body card">
            @section('main-table') 
                   @show
            </div>
            <!-- /.box-body -->
            </section>
          </div>

@endsection
