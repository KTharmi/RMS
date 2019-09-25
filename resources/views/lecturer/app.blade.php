<!DOCTYPE html>
<html lang="en">

<head>
@include('lecturer/layouts/head')
</head>

<body>
  <!-- Navbar -->
  @include('lecturer/layouts/nav')

  <!-- Sidebar -->
  @include('lecturer/layouts/side')



  <!-- Main Content -->
 @section('main-contend')
 @show

  <!-- Footer -->
  @include('layouts/footer')
  @section('script')
  @show
</body>

</html>
