<!DOCTYPE html>
<html lang="en">

<head>
@include('hod/layouts/head')
</head>

<body>
  <!-- Navbar -->
  @include('hod/layouts/nav')
  <!-- Sidebar -->
  @include('hod/layouts/side')



  <!-- Main Content -->
 @section('main-contend')
 @show

  <!-- Footer -->
  @include('layouts/footer')
</body>
</html>
