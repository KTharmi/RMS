@extends('lecturer.ica.icatable')
@section('title', '1G ICA')
@section('main-table')
{!! Form::open()->route('icas.store', [$level]) !!}
{!! Form::select( 'subject_id','Choose your Subject', $subjects ?? [], $subject->id)->id('subject') !!}
{!! Form::select( 'type_id','select the Ica criteria', $ica_types ?? []) !!}
                <table class='table table-bordered'>
                  <thead>
                    <th>No</th>
                    <th>Student IndexNo</th>
                    <th>Student RegNo</th>
                    <th>Student Name</th>
                    <th>ICA 1</th>
                    <th>ICA 2</th>
                    <th>ICA 3</th>
                  </thead>
                  <tbody>
                  @foreach($students as $student)
                  @php
                    $ica = $icas->where('student_id', $student->id)->first();
                  @endphp
                  <tr>
                  <td>{{ $loop->index +1 }} </td>
                  <td>{{ $student->index_no }}<input type="hidden" name="id[]" value="{{ $student->id }}"></td>
                  <td>{{ $student->register_no }}</td>
                  <td>{{ $student->name }}</td>
                  <th><input type="text" value="{{ $ica->ica1 ?? ''}}" name="ica1[]"></th>
                  <th><input type="text" value="{{ $ica->ica2 ?? ''}}" name="ica2[]"></th>
                  <th><input type="text" value="{{ $ica->ica3 ?? ''}}" name="ica3[]"></th>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
                <input type="submit" value="Create" class="btn btn-success">
 {!! Form::close() !!}
@endsection

@section('script')
  <script>
    $(document).ready(function(){
      var route = "{{ route('icas.create', ['level' => $level, 'subject' => 'SUBJECT']) }}";
      $('#subject').change(function(){
        window.location.href = route.replace('SUBJECT', $(this).val());
      });
  });
  </script>
@endsection