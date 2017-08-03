     <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

              <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/main/index"><i class="fa fa-bar-chart-o"></i> Dashboard</a>
                        </li>
                        <li>
                             <a href="<?php echo base_url();?>index.php/exrateController/index"><i class="fa fa-line-chart"></i> Exchange Rate</a>
                        </li>
                        <li>
                             <a href="<?php echo base_url();?>index.php/userController/index"><i class="fa fa-user"></i> User Management</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/customer_C/index');?>"><i class="fa fa-users"></i> Customer</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Menu_C/index');?>"><i class="fa fa-cutlery"></i> Menu</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/table_C/index');?>"><i class="fa fa-th"></i> Table</a>
                        </li>
                        <li>
                            <a href="<?= base_url()?>index.php/Position"><i class="fa fa-map-marker"></i> Position </a>
                        </li>
                        <li>
                            <a href="<?= base_url()?>index.php/Category"><i class="glyphicon glyphicon-duplicate"></i> Category </a>
                        </li>
                        <li>
                            <a href="<?= base_url()?>index.php/Balance"><i class="fa fa-money"></i> Balance </a>
                        </li>
                        <li>
                            <a href="<?= base_url()?>index.php/Staff"><i class="fa fa-male"></i> Staff </a>
                        </li>
                        <!-- <li>
                            <a href="<?= base_url()?>index.php/closeShift_report_C"><i class="fa fa-refresh"></i> Closeshift Lists</a>
                        </li> -->
                        <li>
                            <a href="<?= base_url()?>index.php/Order_pos_c"><i class="fa fa-reorder"></i> POS </a>
                        </li>
                        <li>
                            <a href="<?= base_url()?>index.php/report_c/sale_report_daily"><i class="fa fa-reorder"></i> View Sale Report </a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
   </nav>
