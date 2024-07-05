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
                    <a href="<?=base_url('Dashboard')?>" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"> </i>
                        <p>
                            Customer
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('customers/create'); ?>" class="nav-link">
                                <i class=" nav-icon far fa-circle nav-icon"></i>
                                <p>Add-Customer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url()?>Customers" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View-Customer</p>
                            </a>
                        </li>

                    </ul>
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
                            <a href="<?= base_url('employee/add') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Employee</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('employee') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Employees</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Projects
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Project/add') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Project</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Project/index') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Projects</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Leads
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('lead/add'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Lead</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('lead'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Leads</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"> </i>
                        <p>
                            Vendors
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=base_url('vendor/add')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Vendor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url('vendor')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Vendors</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"> </i>
                        <p>
                            Document
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=base_url()?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add-Document</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url()?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View-Document</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"> </i>
                        <p>
                            Compliance
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=base_url()?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add-Compliance</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url()?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View-Compliance</p>
                            </a>
                        </li>
                    </ul>
                </li>
        </nav>
        <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
</aside>
</ul>