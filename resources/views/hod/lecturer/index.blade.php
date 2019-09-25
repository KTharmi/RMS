@extends('hod.app')
@section('main-contend')
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Assign lecturers</h3>
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
                  <th>Lecturer Name</th>
                  <th>Access</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($lecturers as $lecturer)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $lecturer->name }}</td>
                  <td>{{ $lecturer->is_active }}</td>
                  <td><a href="{{ route('lecturer.edit', $lecturer->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>S.NO</th>
                  <th>Lecturer Name</th>
                  <th>Access</th>
                  <th>Edit</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>
         
@endsection
