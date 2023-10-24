<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="<?php echo base_url();?>">
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon p-l-10">
                            <img src="<?php echo _IMAGES_PATH;?>logo-icon.png" alt="homepage" class="light-logo" />
                           
                        </b> -->
                        <span class="logo-text">
                             <img src="<?php echo _IMAGES_PATH;?>homelogo.jpg" alt="homepage" class="light-logo" />
                        </span>
                    </a>
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <!-- <ul class="navbar-nav float-right">
                                
                <li class="nav-item dropdown">
                    <strong style="color: #ffffff;">Welcome <?php echo $this->session->userdata('client_fname'); ?></strong>&nbsp;&nbsp;<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo _IMAGES_PATH;?>1.jpg" alt="user" class="rounded-circle" width="31"></a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url();?>/logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                    </div>
                </li>
                
            </ul> -->
        </div>
    </nav>
</header>