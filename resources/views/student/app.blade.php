<!DOCTYPE html>
<html lang="en">

<head>
@include('student/layouts/head')

</head>

<body>
  <!-- Navbar -->
  @include('student/layouts/nav')

  <!-- Sidebar -->
  @include('student/layouts/side')


  <!-- Main Content -->
 @section('main-contend')
 @show

 <!-- Footer -->
 @include('layouts/footer')
</body>

</html>
