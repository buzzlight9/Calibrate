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
            <span class="hidden-xs">Hello {{ucwords((Auth::user()->name))}}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="/admin/dist/img/avatar.png" class="img-circle" alt="User Image">
              <p>
                {{ucwords((Auth::user()->name))}} - {{ucfirst((Auth::user()->user_type))}}
                <small>Account Created On {{(Auth::user()->created_at->toFormattedDateString())}}</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="{{route('home')}}" class="btn btn-default btn-flat"><span style='color:green' class='glyphicon glyphicon-user'></span></a>
              </div>
              <div class="pull-right">
                <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  <span style='color:green' class='glyphicon glyphicon-off'></span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>