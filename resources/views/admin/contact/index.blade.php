@extends('admin.app')
@section('main-contend')
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">User Request Table</h3>
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
                  <th> Name</th>
                  <th>Email</th>
                  <th>Reg No</th>
                  <th>Faculty</th>
                  <th>Show</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $contact->name }}</td>
                  <td>{{ $contact->email }}</td>
                  <td>{{ $contact->register_no }}</td>
                  <td>{{ $contact->faculty }}</td>
                  <td><a href ="{{route('contact.show', $contact->id) }}"><span class="glyphicon glyphicon-folder-open"></span></a></td>
                  <td><a href ="{{route('contact.delete', $contact->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.NO</th>
                  <th> Name</th>
                  <th>Email</th>
                  <th>Reg No</th>
                  <th>Faculty</th>
                  <th>Show</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>
         
@endsection
