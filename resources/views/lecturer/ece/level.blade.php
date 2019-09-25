@extends('lecturer.ece.ecetable')
@section('title', '1G ECE')
@section('main-table')
{!! Form::open()->route('eces.store',[$level]) !!}
{!! Form::select( 'subject_id','Choose your Subject', $subjects ?? []) !!}
{!! Form::select( 'type_id','select the Ece criteria', $ece_types ?? []) !!}
                <table class='table table-bordered'>
                  <thead>
                    <th>No</th>
                    <th>Student IndexNo</th>
                    <th>Student RegNo</th>
                    <th>Student Name</th>
                    <th>Q 1</th>
                    <th>Q 2</th>
                    <th>Q 3</th>
                    <th>Q 4</th>
                  </thead>
                  <tbody>
                  @foreach($students as $student)
                  <tr>
                  <td>{{ $loop->index +1 }} </td>
                  <td>{{ $student->index_no }}<input type="hidden" name="id[]" value="{{ $student->id }}"></td>
                  <td>{{ $student->register_no }}</td>
                  <td>{{ $student->name }}</td>
                  <th><input type="text" name="q1[]"></th>
                  <th><input type="text" name="q2[]"></th>
                  <th><input type="text" name="q3[]"></th>
                  <th><input type="text" name="q4[]"></th>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
                <input type="submit" value="Create" class="btn btn-success">
 {!! Form::close() !!}
@endsection