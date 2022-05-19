<?php include "header-en.php" ?>
<?php include "navigation-en.php" ?>
<div role="main" class="main">
    <div class="slider-container light rev_slider_wrapper" >
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 700, 'disableProgressBar': 'on'}">
            <ul>
                <?php
                $i = 0;
                if (!empty($slide)) {
                    foreach ($slide as $row) {
                        ?>
                        <li data-transition="fade" >   
                            <?php
                            if (count($slideitem_id) > 0) {
                                for ($i = 0; $i < count($slideitem_id); $i++) {
                                    if ($slideitem_id[$i] == $row->slide_id) {
                                        if ($tipe[$i] == "gambar") {
                                            ?>
                                            <img src="<?php echo base_url() . str_replace("./", "", $slide_gambar[$i]) ?>" alt="<?php echo $slide_alt[$i] . '-' . $row->slide_id . '_' . $slideitem_id[$i] . '-' . $i ?>"  
                                                 alt=""
                                                 data-bgposition="center 100%" 
                                                 data-bgfit="cover" 
                                                 data-bgrepeat="no-repeat" 
                                                 class="rev-slidebg">

                                            <div class="tp-caption top-label tp-caption-custom-stripe"
                                                 data-x="right" data-hoffset="100"
                                                 data-y="bottom" data-voffset="101"
                                                 data-start="1000"
                                                 data-transform_in="x:[100%];opacity:0;s:1000;"><?php echo $row->judul; ?>
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                            }
                            ?>
                        </li>
                        <?php
                        $i++;
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4 mt-lg-5 mb-4 py-4">
            <div class="col-lg-4">
                <h1 class="mb-0 text-color-dark">Vadhana International</h1>
                <p class="lead">One Stop Service Solution.</p>
            </div>
            <div class="col-lg-2 text-center d-none d-lg-block">
                <img src="<?php echo base_url() ?>assets/frontend/img/dotted-line-angle.png" class="img-fluid" alt="Garis pemisah Vadhana"/>
            </div>
            <div class="col-lg-6">
                <p>
                    We are always provides services and goods professionally and hold commitment and trust of customers. We have reliable human resources to complete project from our customers.</p>
                <a class="mt-3" href="<?php echo base_url() ?>profil">More <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </div>

    <section class="section section-tertiary section-no-border section-custom-construction">
        <div class="container">
            <div class="row pt-0">
                <div class="col">
                    <h2 class="mb-0 text-color-dark">Services</h2>
                    <p class="lead">Vadhana provide several services to complete your project.</p>
                </div>
            </div>
            <div class="row mt-4">
                <?php
                //berasal dari helper halaman
                $layanan = getHalaman('Layanan', 2, 4);
                foreach ($layanan as $row) {
                    ?>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 custom-feature-box mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                            <div class="feature-box-icon">
                                <img src="<?php echo base_url() ?>assets/frontend/img/demos/construction/icons/services.png" alt="<?php echo $row->judul_halaman; ?>" class="img-fluid" />
                            </div>
                            <div class="feature-box-info ml-3">
                                <h4 class="mb-2"><?php echo $row->judul_halaman; ?></h4>
                                <p><?php echo $row->meta_desc; ?></p>
                                <a class="mt-3" href="<?php echo base_url() . 'en/services/' . encrypt($row->halaman_id) . '/' . strtolower(str_replace(" ", "-", str_replace("'", "", preg_replace('/[^a-zA-Z0-9\s+\']/', '', trim($row->judul_halaman))))) ?>">More <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>    
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="pt-3 pb-4 home-concept-construction">
        <div class="container">
            <div class="row pt-4">
                <div class="col">
                    <h2 class="mb-0 text-color-dark">Project</h2>
                    <p class="lead">Some of projects we have worked on.</p>

                    <div class="diamonds-wrapper lightbox" data-plugin-options="{'delegate': '.diamond', 'type': 'image', 'gallery': {'enabled': true}}">
                        <ul class="diamonds">
                            <?php
                            $x = 0;
                            foreach ($proyek as $row) {
                                $x++;
                                ?>
                                <li>
                                    <a href="<?php echo base_url() . $row->image; ?>" class="diamond <?php
                                    if ($x == 4 || $x == 6 || $x == 7) {
                                        echo "diamond-sm";
                                    }
                                    ?>">
                                        <div class="content">
                                            <img src="<?php echo base_url() . $row->image; ?>" class="img-fluid" alt="<?php echo $row->judul ?>"/>
                                        </div>
                                    </a>
                                </li>    
                                <?php
                            }
                            ?>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row row-diamonds-description justify-content-center justify-content-xl-start text-center text-xl-left">
                <div class="col-md-8 col-lg-6">
                    <p>We always give maximum effort to every project we work on.</p>
                    <a class="btn btn-outline btn-primary" href="<?php echo base_url(); ?>en/project">See all projects</a>
                </div>
            </div>
        </div>
    </section>
    <?php //testimoni here  ?>

    <section class="pt-3 section-custom-construction-2">
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-12 text-center">
                    <div class="owl-carousel owl-theme stage-margin rounded-nav" data-plugin-options="{'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40, 'items': 6, 'autoplay': true, 'autoplayTimeout': 3000}">

                        <?php for ($i = 0; $i < isset($partner); $i++) { ?>
                            <div>
                                <img class="img-fluid" src="<?php echo base_url() . $partner[$i]->media_kecil_link; ?>" alt="<?php echo $partner[$i]->alt_teks ?>" itemprop="image">
                            </div>
                        <?php } ?>			
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center mt-4">
                    <hr class="solid mt-0 mb-4">
                </div>
            </div>
            <div class="row pt-4">
                <div class="col">
                    <h2 class="mb-0 text-color-dark">Media Corner</h2>
                    <p class="lead mb-2">Latest Information from PT Vahdhana International.</p>
                </div>
            </div>
            <div class="row">
                <?php
                if (isset($berita)) {
                    $i = 0;
                    foreach ($berita as $row) {
                        $tgl = date("d M Y", strtotime($row->tgl_post));
                        $hari = date("l", strtotime($row->tgl_post));
                        ?>
                        <div class="col-lg-4">
                            <div class="recent-posts mt-4">
                                <?php
                                if ($row->media_id <> 0) {
                                    $berita_gambar = $media[$i];
                                    $berita_alt = $alt[$i];
                                } else {
                                    $berita_gambar = "assets/images/vadhana_default.jpg";
                                    $berita_alt = $row->judul;
                                }
                                ?>
                                <a href="<?php echo base_url() . "en/read/" . encrypt($row->artikel_id) . "/" . strtolower(str_replace(" ", "-", preg_replace('/\s+/', ' ', preg_replace('/[^a-zA-Z0-9\s+\']/', '', trim($row->judul))))) ?>" rel="bookmark">
                                    <img class="img-fluid pb-3" src="<?php echo base_url() . $berita_gambar ?>" alt="<?php echo $berita_alt ?>" itemprop="image">
                                </a>   
                                <?php
                                $deskripsi = explode('<div style="page-break-after: always"><span style="display:none">&nbsp;</span></div>', $row->isi);
                                $desk = strip_tags($deskripsi[0]);
                                $line = $desk;
                                if (preg_match('/^.{1,220}\b/s', $desk, $match)) {
                                    $line = $match[0];
                                }
                                ?>
                                <article class="post">
                                    <div class="date">
                                        <span class="day"><?php echo date("d", strtotime($tgl)) ?></span>
                                        <span class="month"><?php echo date("M", strtotime($tgl)) ?></span>
                                    </div>
                                    <h4 class="pt-3 pb-0 mb-0"><a class="text-color-dark" href="<?php echo base_url() . "en/read/" . encrypt($row->artikel_id) . "/" . strtolower(str_replace(" ", "-", preg_replace('/\s+/', ' ', preg_replace('/[^a-zA-Z0-9\s+\']/', '', trim($row->judul))))) ?>"><?php echo $row->judul ?></a></h4>
                                    <p>By admin</p>
                                    <p><?php echo strip_tags($line) ?>...</p>
                                    <a class="mt-3" href="<?php echo base_url() . "en/read/" . encrypt($row->artikel_id) . "/" . strtolower(str_replace(" ", "-", preg_replace('/\s+/', ' ', preg_replace('/[^a-zA-Z0-9\s+\']/', '', trim($row->judul))))) ?>">More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </article>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                }
                ?>
            </div>
        </div>
    </section>
</div>
<?php include "footer-en.php" ?>