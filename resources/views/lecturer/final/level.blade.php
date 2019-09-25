@extends('lecturer.final.finaltable')
@section('title', '1G FINAL')
@section('course', '-')
@section('main-table')
@foreach($students as $student)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $student->index_no }}</td>
                  <td>{{ $student->register_no }}</td>
                  <td>{{ $student->name }}</td>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  </tr>
                  @endforeach
@endsection