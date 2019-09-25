<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin/img/secreterial.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Lectures</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard </a></li>
          </ul>
        </li>

        <li>
            <a href="{{ route('lecturer.calander') }}">
              <i class="fa fa-calendar"></i> <span>Calendar</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-red">3</small>
                <small class="label pull-right bg-blue">17</small>
              </span>
            </a>
          </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>ICA Enter</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('icas.create', '1G')}}"><i class="fa fa-circle-o"></i> 1G</a></li>
                <li><a href="{{route('icas.create', '1S')}}"><i class="fa fa-circle-o"></i> 1S</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level two
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('icas.create', '2G')}}"><i class="fa fa-circle-o"></i> 2G</a></li>
                <li><a href="{{route('icas.create', '2S')}}"><i class="fa fa-circle-o"></i> 2S</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level Three
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('icas.create', '3G')}}"><i class="fa fa-circle-o"></i> 3G</a></li>
                <li><a href="{{route('icas.create', '3M')}}"><i class="fa fa-circle-o"></i> 3M</a></li>
                <li><a href="{{route('icas.create', '3S')}}"><i class="fa fa-circle-o"></i> 3S</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level Four
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('icas.create', '4M')}}"><i class="fa fa-circle-o"></i> 4M</a></li>
                <li><a href="{{route('icas.create', '4S')}}"><i class="fa fa-circle-o"></i> 4S</a></li>
                <li><a href="{{route('icas.create', '4X')}}"><i class="fa fa-circle-o"></i> 4X</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span>ECE Enter</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Level One
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('eces.create', '1G')}}"><i class="fa fa-circle-o"></i> 1G</a></li>
                  <li><a href="{{route('eces.create', '1S')}}"><i class="fa fa-circle-o"></i> 1S</a></li>
                </ul>
              </li>

               <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Level two
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('eces.create', '2G')}}"><i class="fa fa-circle-o"></i> 2G</a></li>
                  <li><a href="{{route('eces.create', '2S')}}"><i class="fa fa-circle-o"></i> 2S</a></li>
                </ul>
              </li>

               <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Level Three
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('eces.create', '3G')}}"><i class="fa fa-circle-o"></i> 3G</a></li>
                  <li><a href="{{route('eces.create', '3M')}}"><i class="fa fa-circle-o"></i> 3M</a></li>
                  <li><a href="{{route('eces.create', '3S')}}"><i class="fa fa-circle-o"></i> 3S</a></li>
                </ul>
              </li>

               <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Level Four
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('eces.create', '4M')}}"><i class="fa fa-circle-o"></i> 4M</a></li>
                  <li><a href="{{route('eces.create', '4S')}}"><i class="fa fa-circle-o"></i> 4S</a></li>
                  <li><a href="{{route('eces.create', '4X')}}"><i class="fa fa-circle-o"></i> 4X</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span>Final Result</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Level One
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('final.index','1G')}}"><i class="fa fa-circle-o"></i> 1G</a></li>
                  <li><a href="{{route('final.index','1S')}}"><i class="fa fa-circle-o"></i> 1S</a></li>
                </ul>
              </li>

               <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Level two
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('final.index','2G')}}"><i class="fa fa-circle-o"></i> 2G</a></li>
                  <li><a href="{{route('final.index','2S')}}"><i class="fa fa-circle-o"></i> 2S</a></li>
                </ul>
              </li>

               <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Level Three
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('final.index','3G')}}"><i class="fa fa-circle-o"></i> 3G</a></li>
                  <li><a href="{{route('final.index','3M')}}"><i class="fa fa-circle-o"></i> 3M</a></li>
                  <li><a href="{{route('final.index','3S')}}"><i class="fa fa-circle-o"></i> 3S</a></li>
                </ul>
              </li>

               <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Level Four
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('final.index','4M')}}"><i class="fa fa-circle-o"></i> 4M</a></li>
                  <li><a href="{{route('final.index','4S')}}"><i class="fa fa-circle-o"></i> 4S</a></li>
                  <li><a href="{{route('final.index','4X')}}"><i class="fa fa-circle-o"></i> 4X</a></li>
                </ul>
              </li>
            </ul>
          </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
