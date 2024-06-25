<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?=base_url('assets/')?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Company</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=base_url('assets/')?>dist/img/user8-128x128.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <?=$this->session->userdata('name')?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="<?=base_url('admin/dashboard/index')?>" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>


                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Employee
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=base_url()?>admin/dashboard/addemployee" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add-Employee</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url()?>admin/Company/viewemployee" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View-Employee</p>
                            </a>
                        </li>

                    </ul>

                    <ul>
                    </ul>
                    <!-- <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fa fa-user-circle"></i>
                        <p>
                            Department
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=base_url('User_con/department')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add-Department</p>
                            </a>
                        </li>
                    </ul>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon "></i>
                        <i class="fa fa-newspaper" aria-hidden="true"></i>
                        <p>
                            News
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=base_url('Reset/enews')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>The Hindu</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=base_url('Reset/tnews')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Telugu News</p>
                            </a>
                        </li>
                    </ul> -->
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=base_url('admin/dashboard/changePassword')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Change Password</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=base_url('Excel_con')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>import excel sheet</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=base_url('Reset/youtubee')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>youtube</p>
                            </a>
                        </li>
                    </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
</aside>
</ul>