@extends('user/app')
 @section('bg-img',asset('user/img/twitter-meta.png'))
 @section('title','Contact Us')
 @section('sub-title','University Of Jaffna')
 @section('main-contend')
 <style>
   input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
 </style>
  <div class="container">
  <div style="text-align:center">
    <h2 >Contact Us</h2>
     

<h4><font color="red"> Students! <br />
  Fill the form for any enquiry regarding to the results, Thank You. </font><br />
</h4>
  </div>
  <div class="row">
    <div class="column">
      <h5 style="color:purple;"><p>
<!-- <span class="glyphicon glyphicon-envelope"></span>  -->Email: drexaminations@gmail.com<br/><br/>
<!-- <span class="glyphicon glyphicon-phone"></span> --> TP: +94 0212223609<br/><br/>
<!-- <span class="glyphicon glyphicon-map-marker"></span> --> Website: <a href="http://www.jfn.ac.lk/">www.jfn.ac.lk</a><br/></p></h5>
    </div>
    <div class="column">
      @include('includes\messages')
      <form  role="form" action ="{{route('contact.store')}}" method="post">
      {{csrf_field()}}
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name"  value="{{ old('name') }}" placeholder="Your Name..">
        <label for="lname">Email Address</label>
        <input type="email" class="form-control" id="email" name="email"  value="{{ old('email') }}" placeholder="Your Email Address..">
        <label for="reg_no">Reg No</label>
        <input type="text" class="form-control" id="reg_no" name="register_no" value="{{ old('register_no') }}" placeholder="Your Reg NO..">
        <label for="Faculty">Faculty</label>
        <select id="Faculty" name="Faculty">
          <option selected disabled> Selected faculty for</option>
          <option value="Science">Science</option>
          <option value="Arts">Arts</option>
          <option value="Management&Commerce">Management&Commerce</option>
        </select>
        <label for="subject">Message</label>
        <textarea id="subject" name="description" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
  @endsection