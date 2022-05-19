<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="<?php echo base_url(); ?>spadmin/dashboard">
                <img src="<?php echo base_url(); ?>assets/admin/layout/img/logohamac.png" alt="logo" width="130" />
            </a>
        </div>        
        <div class="hor-menu hidden-sm hidden-xs">
            <ul class="nav navbar-nav">
                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
                <li class="classic-menu-dropdown <?php if ($page_name == "dashboard") echo "active"; ?>">
                    <a href="<?php echo base_url(); ?>spadmin/dashboard">
                        <i class="icon-home"></i> Dashboard <span class="selected"></span>
                    </a>
                </li>
                <?php if ($this->session->userdata('jenis_pengguna') == 'spadmin'){?>
                <li class="classic-menu-dropdown <?php if ($page_name == "manage_pengguna") echo "active"; ?>">
                    <a href="<?php echo base_url(); ?>spadmin/manage_pengguna">
                        <i class="icon-user"></i> Pengguna Sistem <span class="selected"></span>
                    </a>
                </li><?php } ?>
                
                
                <li class="menu-dropdown mega-menu-dropdown <?php if ($page_name == "ganti_password") echo "active"; ?>">
                    <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
                        Halaman Menu Tree <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" style="min-width: 710px">
                        <li class="classic-menu-dropdown <?php if ($page_name == "ganti_password") echo "active"; ?>">
                            <div class="mega-menu-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="mega-menu-submenu">
                                            <li>
                                                <h3>Menu Tree</h3>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>spadmin/ganti_password">
                                                    <i class="fa  fa-university"></i> Ganti Password yang sedang login </a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                
                
                <li class="classic-menu-dropdown <?php if ($page_name == "log") echo "active"; ?>">
                    <a href="<?php echo base_url(); ?>spadmin/log">
                        <i class="icon-docs"></i>  Log Sistem  <span class="selected"></span>
                    </a>
                </li>                               
                
            </ul>
        </div>
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="<?php echo base_url(); ?>media/default.jpg"/>
                        <span class="username username-hide-on-mobile " >
                            <?php echo substr(ucwords($this->session->userdata('nama')), 0, 4) ?> </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="<?php echo base_url() . "spadmin/ganti_password" ?>">
                                <i class="icon-lock"></i> Ganti Password </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>lawang/logout">
                                <i class="icon-key"></i> Log Out </a>
                        </li>
                    </ul>
                </li>                
                
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>