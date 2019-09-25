<header class="main-header">
    <!-- Logo -->
    <a href="{{route('home')}}" class="logo">
        <span class="logo-lg"><b>HOD</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="{{route('home')}}" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('admin/img/secreterial.png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">HOD</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="{{asset('admin/img/secreterial.png')}}" class="img-circle" alt="User Image">
                <p>
                  HOD - Department of Computer Science
                  <small>Member since March. 2019</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('hod.profile') }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"  class="btn btn-default btn-flat">Sign out</a>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
