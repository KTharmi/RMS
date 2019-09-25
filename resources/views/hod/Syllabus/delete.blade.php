@extends('hod.app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Delete A Syllabus</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <h3>Delete Syllabus</h3>
            <div class="card">
                <div class="card-body pad">
                <div class="panel-heading">Are you sure?</div>
                        <div class="panel-body">{{ $subject->course_name }}</div>
                        {!!Form::open()->method('delete')->route('syllabus.destroy', ['subject' => $subject->id])!!}
                        {!!Form::hidden('id')->value($subject->id)!!}
                        {!!Form::submit('Delete')->danger()!!}
                        {!!Form::anchor("Cancel")->route('syllabus.index')!!}
                        {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>
@endsection