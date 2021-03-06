<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{!!user()->picture!!}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>{!!user()->name!!}</p>
      </div>
    </div>
    <!-- search form -->
   
     <ul class="sidebar-settings">
        <li ><a href="{!!guard_url('profile')!!}"><i class="fa fa-user "></i> Profile</a></li>
        <li ><a href="{!!guard_url('logout')!!}"><i class="fa fa-power-off"></i> Logout</a></li>
    </ul>
    
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      {!!Menu::menu('admin', 'menu::menu.admin')!!}
      <li class="header">Masters</li>
      <li><a href="{{ guard_url('settings/setting') }}"><i class="fa fa-sliders text-red"></i> <span>Settings</span></a></li>
      <li><a href="{{ guard_url('masters') }}"><i class="fa fa-circle-o text-yellow"></i> <span>Masters</span></a></li>
      <li><a href="{{ guard_url('reports') }}"><i class="fa fa-bar-chart text-aqua"></i> <span>Reports</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
