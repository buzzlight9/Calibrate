<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/admin/dist/img/avatar.png" class="img-circle" alt="User Image">-->
        </div>
        <div class="pull-left info">
          <p>{{ucfirst((Auth::user()->user_type))}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Active</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active treeview">
          <a href="#">
            <i class="glyphicon glyphicon-cog"></i> <span>Equipment Details</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('instruments.index') }}"><i class="glyphicon glyphicon-triangle-right"></i>Instruments</a></li>
            <li><a href="{{ route('calibration') }}"><i class="glyphicon glyphicon-triangle-right"></i>Calibrations Due</a></li>
            @can('isAdmin')
              <li><a href="{{ route('users') }}"><i class="fa fa-circle-o"></i>Users</a></li>
              <li><a href="{{ route('register') }}"><i class="fa fa-circle-o"></i>Create Users</a></li>
            @endcan
            
          </ul>
        </li>
      </ul>
    </section><!-- /.sidebar -->
  </aside>