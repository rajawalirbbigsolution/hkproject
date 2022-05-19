<header id="header" class="header-narrow header-semi-transparent-light" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 1, 'stickySetTop': '1'}" itemscope itemtype="http://schema.org/WPHeader">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column" >
                    <div class="header-row">
                        <div class="header-logo">
                            <img class="logo-default" alt="Porto" width="324" height="212" src="<?php echo base_url()?>assets/frontend/img/demos/construction/logo-construction.png">
                            <a href="<?php echo base_url() ?>" itemprop="headline">
                                <img class="logo-small" alt="Porto" width="131" height="48" src="<?php echo base_url()?>assets/frontend/img/demos/construction/logo-construction-small.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-stripe">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse" itemscope itemtype="http://schema.org/SiteNavigationElement">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link <?php if($page_name=='Beranda')echo 'active'?>" href="<?php echo base_url(); ?>en" itemprop="url">
                                                <span itemprop="name">Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link <?php if($page_name=='Profil')echo 'active'?>" href="<?php echo base_url(); ?>en/profile" itemprop="url">
                                                <span itemprop="name">Profile</span>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle <?php if($page_name=='Layanan')echo 'active'?>" href="#';?>" >
                                                Services
                                            </a>
                                            <ul class="dropdown-menu">
                                                <?php
                                                //berasal dari helper halaman
                                                $nav_layanan=getHalaman('Layanan',2,10);
                                                if(isset($nav_layanan)){
                                                    for($i=0;$i<count($nav_layanan);$i++){?>
                                                <li><a class="dropdown-item" href="<?php echo base_url() . 'en/services/' . encrypt($nav_layanan[$i]->halaman_id) . '/' . strtolower(str_replace(" ", "-", str_replace("'","",preg_replace('/[^a-zA-Z0-9\s+\']/', '', trim($nav_layanan[$i]->judul_halaman))))) ?>" itemprop="url">
                                                        <span itemprop="name"><?php echo $nav_layanan[$i]->judul_halaman;?></span>
                                                    </a>
                                                </li>
                                                <?php }
                                                }
                                                 ?>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link <?php if($page_name=='Proyek' || $page_name=='Proyek Detail')echo 'active'?>" href="<?php echo base_url()?>en/project" itemprop="url">
                                                <span itemprop="name">Project</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link <?php if($page_name=='Lelang')echo 'active'?>" href="<?php echo base_url()?>en/auction" itemprop="url">
                                                <span itemprop="name">Auction</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link <?php if($page_name=='Rental')echo 'active'?>" href="<?php echo base_url()?>en/rental" itemprop="url">
                                                <span itemprop="name">Rental</span>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle <?php if($page_name=='Berita' || $page_name=='Lowongan' || $page_name=='Csr')echo 'active'?>" href="#">
                                                Information
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo base_url()?>en/news" itemprop="url"><span itemprop="url">News</span></a></li>
                                                <li><a class="dropdown-item" href="<?php echo base_url()?>en/jobvacancy" itemprop="url"><span itemprop="url">Job Vacancy</span></a></li>
                                                <li><a class="dropdown-item" href="<?php echo base_url()?>en/csr" itemprop="url"><span itemprop="url">CSR</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link <?php if($page_name=='Kontak Vadhana International')echo 'active'?>" href="<?php echo base_url()?>en/contact" itemprop="url">
                                                <span itemprop="name">Contact</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            
                            <ul class="header-social-icons social-icons d-none d-lg-block">
                                <li><a href="<?php echo base_url();?>" title="Bahasa" ><span class="btn btn-sm btn-light">ID </span></a></li>
                                <li><a href="<?php echo base_url();?>en" title="English" ><span class="btn btn-sm btn-danger">EN </span></a></li>
                            </ul>
                            
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
