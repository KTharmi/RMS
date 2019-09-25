  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="rms">Result Management System</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
        <li class="nav-item">
            <a class="nav-link " href="{{route('rms')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('post')}}">Sample Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('contact')}}">Contact</a>
          </li>
          <li class="nav-item">
          <a class="nav-link " href="{{route('home')}}">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead" style="background-image: url(@yield('bg-img'))">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-red font-weight-bold  ">@yield('title')</h1>
          <span class="subheading">@yield('sub-title')</span>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
        </div>
      </div>
    </div>
  </header>


