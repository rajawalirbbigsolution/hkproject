<body>
    <div class="body">
        <header id="header"
                data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
            <div class="header-body">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="<?= base_url(); ?>">
                                        <img alt="Hamac International" width="100" height="48" data-sticky-width="82"
                                             data-sticky-height="40" data-sticky-top="25"
                                             src="<?= base_url() ?>assets/img/logohamac.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <?php
                            $row = $data_contact[0];
                            ?>
                            <div class="header-row pt-3">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                            <span class="ws-nowrap"><i class="far fa-envelope"></i>
                                                <?php echo $row->email ?></span>
                                        </li>
                                        <li
                                            class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
                                            <span class="ws-nowrap"><i class="fas fa-phone"></i> <?php echo $row->telp ?></span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-row">
                                <div class="header-nav pt-1">
                                    <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li>
                                                    <a class="nav-link <?php if ($page_name == 'Beranda') echo 'active' ?>" href="<?php echo base_url(); ?>" itemprop="url">
                                                        <span itemprop="name">Beranda</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link <?php if ($page_name == 'Profil') echo 'active' ?>" href="<?php echo base_url(); ?>profil" itemprop="url">
                                                        <span itemprop="name">Profil</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link <?php if ($page_name == 'Layanan') echo 'active' ?>" href="<?php echo base_url(); ?>layanan" itemprop="url">
                                                        <span itemprop="name">Layanan</span>
                                                    </a>
                                                </li>                                                
                                                
                                                <li>
                                                    <a class="nav-link <?php if ($page_name == 'Katalog') echo 'active' ?>" href="<?= base_url() ?>katalog" itemprop="url">
                                                        <span itemprop="name">Katalog</span>
                                                    </a>
                                                </li>                                                
                                                <li class="dropdown">
                                                    <a class="nav-link dropdown-toggle <?php if ($page_name == 'Berita' || $page_name == 'Lowongan' || $page_name == 'Csr') echo 'active' ?>" href="#">
                                                        Informasi
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="<?php echo base_url() ?>berita" itemprop="url"><span itemprop="name">Berita</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="nav-link <?php if ($page_name == 'Kontak') echo 'active' ?>"
                                                       href="<?php echo base_url() ?>kontak" itemprop="url">
                                                        <span itemprop="name">Kontak</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown">                                                                                                      
                                                    <?php
                                                    if ($this->session->userdata('loginmember') != 1)
                                                        $this->session->set_flashdata('flash_messages', 'Login Member');
                                                    $this->session->set_flashdata('flash_messagex', 'Member');
                                                    ?>
                                                    <a class="nav-link dropdown-toggle  <?php if ($page_name == 'Daftar' || $page_name == 'Login Member') echo 'active' ?>" href="#" itemprop="url">
                                                        <span> <?php
                                                            if ($this->session->userdata('loginmember') != 1)
                                                                echo $this->session->flashdata('flash_messagex');
                                                            if ($this->session->userdata('loginmember') == 1)
                                                                echo 'Member (' . substr(ucwords($this->session->userdata('nama')), 0, 4) . ')'
                                                                ?>
                                                        </span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <?php if ($this->session->flashdata('flash_messages') != ""): ?>
                                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>login" itemprop="url">
                                                                    <span><?= $this->session->flashdata('flash_messages') ?></span></a></li>
                                                            <li><a  class="dropdown-item" href="<?php echo base_url() ?>register_member" itemprop="url">
                                                                    <span>Daftar</span></a></li>


                                                        <?php endif; ?>                                                       
                                                        <?php
                                                        if ($this->session->userdata('loginmember') == 1)
                                                            $this->session->set_flashdata('flash_messagee', 'Logout');
                                                        ?>
                                                        <?php if ($this->session->flashdata('flash_messagee') != ""): ?>                                                            
                                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>logout" itemprop="url">
                                                                    <span itemprop="name">Logout</span></a></li>
                                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>edit_member" itemprop="url">
                                                                    <span itemprop="name">Edit Informasi Akun</span></a></li>
                                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>ganti_password" itemprop="url">
                                                                    <span itemprop="name">Ganti Password</span></a></li>

                                                        </ul>
                                                    <?php endif; ?>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
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