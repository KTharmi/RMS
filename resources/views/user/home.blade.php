@extends('user/app')
 @section('bg-img',asset('user/img/home-bg.jpg'))
 @section('title','Results Management System')
 @section('sub-title','University Of Jaffna')
 @section('main-contend')
 
 <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="{{route('post')}}">
            <h2 class="post-title">
            Result Releasing
            </h2>
          </a>
          <p class="post-meta">Posted by
            <a href="http://www.jfn.ac.lk/">Examination Department</a>
            on Feb 14, 2019</p>
        </div>
      </div>
    </div>
  </div>


  @endsection