<!DOCTYPE html>
<html lang="en">

<head>
@include('admin/layouts/head')
</head>

<body>
  <!-- Navbar -->
  @include('admin/layouts/nav')
  <!-- Sidebar -->
  @include('admin/layouts/side')



  <!-- Main Content -->
 @section('main-contend')
 @show

  <!-- Footer -->
  @include('layouts/footer')
</body>

</html>
