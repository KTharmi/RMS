@extends('admin.app')
@section('main-contend')
<div class="content-wrapper">
    <div class="row  ">
        <div class="col-md-12 offset">
         <h3>Request Mail for external user</h3>
        </div>
    </div>
    <div class="card pad">
        <div class="row">
            <div class="col-md-3">
                <b>Name :</b>
            </div>
            <div class="col-md-3">
                {{ $contact->name }}
            </div>

            <div class="col-md-3">
                <b>Email:</b>
            </div>
            <div class="col-md-3">
                {{ $contact->email }}
            </div>
            <div class="col-md-3">
                <b>Reg No:</b>
            </div>
            <div class="col-md-3">
                {{ $contact->register_no }}
            </div>
            <div class="col-md-3">
                <b>Faculty:</b>
            </div>
            <div class="col-md-3">
                {{ $contact->faculty }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <b>Message:</b>
            </div>
            <div class="col-md-6">
                {{ $contact->description }}
            </div>
        </div>
    </div>
 </div>
@endsection
