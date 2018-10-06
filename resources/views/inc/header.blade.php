<header class="main-header">
    <!-- Logo -->
<a href="{{route('home')}}" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Calibration</b> APP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!--<img src="/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
              @if(Auth::guest())
              <li class="nav-item"><a href="{{ route('register')}}">Register</a></li>
              @else
                
              @endif
            <span class="hidden-xs">{{(Auth::user()->name)}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <!--<img src="/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->

                <p>
                  {{(Auth::user()->name)}} - Admin
                  <small>Account Created On {{(Auth::user()->created_at->toFormattedDateString())}}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                <a href="{{route('home')}}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Signout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>