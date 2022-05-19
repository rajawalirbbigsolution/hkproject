<?php include "header-en.php" ?>
<?php include "navigation-en.php" ?>
<div role="main" class="main">
    <section class="section section-tertiary section-no-border pb-3 mt-0">
        <div class="container">
            <div class="row justify-content-end mt-4">
                <div class="col-lg-10 pt-4 mt-4 text-right">
                    <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">
                        <?php
                        if ($jenis == 'project') {
                            echo "Indeks Project Vadhana International " . $halaman;
                        }
                        ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row" >
            <div class="col-md-12">
                <ul class="nav nav-pills sort-source mb-3 pb-2" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                    <li class="nav-item active" data-option-value="*"><a class="nav-link active" href="#">All </a></li>
                    <?php
                    if(isset($nav_layanan)){
                        foreach($nav_layanan as $rowl){
                        ?>
                        <li class="nav-item " ><a class="nav-link " href="<?php echo base_url()?>en/project_categories/<?php echo  encrypt($rowl->halaman_id);?>"><?php echo $rowl->judul_halaman;?> </a></li>
                        <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>					
        <div class="row pt-2">
            <div class="col">
                <div class="col-lg-8">
                </div>
                <div>
                    <div class="row mb-4 pt-1 portfolio-list sort-destination" >
                        <?php
                        if (isset($proyek)) {
                            $i = 0;
                            foreach ($proyek as $row) {
                                ?>
                                <div class="col-md-6 col-lg-4 isotope-item mb-4 pre-construction">
                                    <a href="<?php echo base_url() . "en/project_detail/" . encrypt($row->proyek_id) . "/" . strtolower(str_replace(" ", "-", preg_replace('/\s+/', ' ', preg_replace('/[^a-zA-Z0-9\s+\']/', '', trim($row->judul))))) ?>">
                                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                            <span class="thumb-info-wrapper">
                                                <img src="<?php echo base_url() . $row->image ?>" class="img-fluid" alt="">
                                                <span class="thumb-info-title">
                                                    <span class="thumb-info-inner">See Project...</span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                    <h4 class="mt-3 mb-0"><?php echo $row->judul ?></h4>
                                    <p class="mb-0"><?php echo $row->kategori ?></p>
                                </div>
                                <?php
                                $i++;
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php echo $links ?>
            </div>
        </div>

    </div>
</div>
<?php include "footer-en.php" ?>