<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('') ?>assets/img/admin/User-icon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="<?= base_url() ?>admin/home">
            <i class="fa fa-dashboard"></i> 
            <span>Dashboard</span>
          </a>
        </li>
        <li class="">
          <a href="<?= base_url() ?>admin/item">
            <i class="fa fa-cubes"></i> 
            <span>Item Management</span>
          </a>
        </li>
        <li class="">
          <a href="<?= base_url() ?>admin/transaction">
            <i class="fa fa-exchange"></i> 
            <span>Transaction</span>
          </a>
        </li>
        <li class="">
          <a href="<?= base_url() ?>admin/user">
            <i class="fa fa-users"></i> 
            <span>User Management</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> 
            <span>Report</span>
          </a>
        </li>
        
        
        <li class="header">SETTING</li>
        <li><a href="#"><i class="fa fa-gears"></i> <span>Edit Profile</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>