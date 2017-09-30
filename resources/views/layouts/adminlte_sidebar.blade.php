  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="text-center info">
          <h4>@yield('login_username')</h4>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li><a href="{{route('admin.dashboard')}}"><i class="glyphicon glyphicon-home"></i> <span>首页</span></a></li>
        
        <li class="treeview active">
          <a href="#"><i class="fa fa-link"></i> <span>实例</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.object.list')}}">列表</a></li>
            <li><a href="{{route('admin.object.add')}}">添加</a></li>
            <li><a href="{{route('admin.object.view')}}">查看</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="glyphicon glyphicon-user"></i> <span>客户管理</span></a></li>
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-cog"></i> <span>系统管理</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/list">员工管理</a></li>
            <li><a href="/admin/add">角色管理</a></li>
            <li><a href="/admin/view">权限管理</a></li>
            <li><a href="/admin/view">页面管理</a></li>
            <li><a href="/admin/view">配置管理</a></li>
            <li><a href="/admin/view">修改密码</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="glyphicon glyphicon-log-out"></i> <span>退出</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>