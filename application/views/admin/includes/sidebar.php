<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

<!-- Sidebar mobile toggler -->
<div class="sidebar-mobile-toggler text-center">
    <a href="#" class="sidebar-mobile-main-toggle">
        <i class="icon-arrow-left8"></i>
    </a>
    Navigation
    <a href="#" class="sidebar-mobile-expand">
        <i class="icon-screen-full"></i>
        <i class="icon-screen-normal"></i>
    </a>
</div>
<!-- /sidebar mobile toggler -->


<!-- Sidebar content -->
<div class="sidebar-content">

    <!-- User menu -->
    <div class="sidebar-user">
        <div class="card-body">
            <div class="media">
                <div class="mr-3">
                    <a href="#"><img src="<?php echo site_url('assets/images/user/face15.jpeg'); ?>" width="38" height="38" class="rounded-circle" alt=""></a>
                </div>

                <div class="media-body">
                    <div class="media-title font-weight-semibold">Admin</div>
                    <div class="font-size-xs opacity-50">
                        <i class="icon-pin font-size-sm"></i> &nbsp;Saidpur, Nilphamari
                    </div>
                </div>

                <div class="ml-3 align-self-center">
                    <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /user menu -->


    <!-- Main navigation -->
    <div class="card card-sidebar-mobile">
        <ul class="nav nav-sidebar" data-nav-type="accordion">

            <!-- Main -->
            <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
            <li class="nav-item">
                <a href="<?php echo base_url('dashboard'); ?>" class="nav-link">
                    <i class="icon-home4"></i>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Asset</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                    <li class="nav-item"><a href="<?php echo base_url('category')  ?>" class="nav-link">Cateogry</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('subcategory')  ?>" class="nav-link">Sub Cateogry</a></li>
                </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Product</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                    <li class="nav-item"><a href="<?php echo base_url('addproduct')  ?>" class="nav-link">Add New</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('products')  ?>" class="nav-link">Product List</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('production')  ?>" class="nav-link">Production</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('producttransfer')  ?>" class="nav-link">Product Transfer</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('totalinventory')  ?>" class="nav-link">Total Inventory</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('inventoryhistory')  ?>" class="nav-link">Inventory History</a></li>
                </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Truck</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                    <li class="nav-item"><a href="<?php echo base_url('addtruck')  ?>" class="nav-link">Add New</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('trucks')  ?>" class="nav-link">Truck List</a></li>
                </ul>
            </li>
            <!-- <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Godown</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                    <li class="nav-item"><a href="<?php echo base_url('addgodown')  ?>" class="nav-link">Add New</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('godowns')  ?>" class="nav-link">Godown List</a></li>
                </ul>
            </li> -->
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Account</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                    <li class="nav-item"><a href="<?php echo base_url('addaccount')  ?>" class="nav-link">Add New</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('accounts')  ?>" class="nav-link">Account List</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('balancetransfer')  ?>" class="nav-link">Balance Transfer</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('balancesheet')  ?>" class="nav-link">Balance Sheet</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('transectionhistory')  ?>" class="nav-link">Transection History</a></li>
                </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Action</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                    
                    <li class="nav-item"><a href="<?php echo base_url('purchase')  ?>" class="nav-link">Purchase</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('sell')  ?>" class="nav-link">Sell</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('expense')  ?>" class="nav-link">Expense</a></li>
                </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Employee</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                    
                    <li class="nav-item"><a href="<?php echo base_url('addemployee')  ?>" class="nav-link">Add New</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('employees')  ?>" class="nav-link">Employee List</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('paysalary')  ?>" class="nav-link">Pay Salary</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('paymentreport')  ?>" class="nav-link">Payment Report</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('salarystatement')  ?>" class="nav-link">Salary Statement</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="icon-stack"></i>
                    <span>
                        Report
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="icon-stack"></i>
                    <span>
                        User Management
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="icon-stack"></i>
                    <span>
                        Settings
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <!-- /main navigation -->

</div>
<!-- /sidebar content -->

</div>
<!-- /main sidebar -->