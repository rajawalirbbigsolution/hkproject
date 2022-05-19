<?php include "header-en.php" ?>
<?php include "navigation-en.php" ?>

<div role="main" class="main" itemscope itemtype="http://schema.org/CreativeWork">
    <section class="section section-tertiary section-no-border pb-3 mt-0">
        <div class="container">
            <div class="row justify-content-end mt-4">
                <div class="col-lg-10 pt-4 mt-4 text-right">
                    <h1 itemprop="headline" class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary"><?php echo $layanan[0]->judul_halaman?></h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row pt-2">            
            <?php include "sidebar-en.php" ?>
            <div class="col-lg-9" itemprop="text">
                <?php echo $layanan[0]->isi_halaman ?>
            </div>
        </div>
    </div>
</div>

<?php include "footer-en.php" ?>