<?php include "header-en.php" ?>
<?php include "navigation-en.php" ?>
<?php $row = $proyek; ?>

<div role="main" class="main">
    <section class="section section-tertiary section-no-border pb-3 mt-0">
        <div class="container">
            <div class="row justify-content-end mt-4">
                <div class="col-lg-10 pt-4 mt-4 text-right">
                    <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Project</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="portfolio-title">
                    <div class="row">
                        <div class="portfolio-nav-all col-lg-1">
                            <a href="<?php echo base_url()?>en/project" data-tooltip data-original-title="Back to list"><i class="fas fa-th"></i></a>
                        </div>
                        <div class="col-lg-10 text-center">
                            <h2 class="mb-0"><?php echo $row->judul; ?></h2>
                        </div>
                        <!--<div class="portfolio-nav col-lg-1">
                            <a href="projects-detail.html" class="portfolio-nav-prev" data-tooltip data-original-title="Previous"><i class="fas fa-chevron-left"></i></a>
                            <a href="projects-detail.html" class="portfolio-nav-next" data-tooltip data-original-title="Next"><i class="fas fa-chevron-right"></i></a>
                        </div>-->
                    </div>
                </div>
                <hr class="solid tall">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-4">
                <div class="thumb-gallery">
                    <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                        <div class="owl-carousel owl-theme manual thumb-gallery-detail show-nav-hover" id="thumbGalleryDetail">
                            <?php
                            $a=0;
                            foreach($media as $row1){
                                $a++;
                                ?>
                            <div>
                                <a href="<?php echo base_url() . $row1->media ?>">
                                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders text-4">
                                        <span class="thumb-info-wrapper text-4">
                                            <img alt="<?php echo $row->judul." - ".$a; ?> " src="<?php echo base_url() . $row1->thumbnail ?>" class="img-fluid">
                                            <span class="thumb-info-title text-4">
                                                <span class="thumb-info-inner text-4"><i class="icon-magnifier icons text-4"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>    
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt" id="thumbGalleryThumbs">
                        <?php
                        $a=0;
                        foreach($media as $row1){
                            $a++;
                            ?>
                        <div>
                            <img alt="<?php echo $row->judul." ".$a; ?>" src="<?php echo base_url() . $row1->media ?>" class="img-fluid cur-pointer">
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">

                <div class="project-detail-construction">

                    <p><?php echo $row->deskripsi; ?></p>

                    <div class="row">
                        <div class="col-lg-8">
                            <ul class="list-project-details">
                                <li>
                                    <label>Project Categories:</label>
                                    <p><?php echo $row->kategori; ?></p>
                                </li>
                                <li>
                                    <label>Status:</label>
                                    <p>Finish</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<?php include "footer-en.php" ?>