<?php include "header-front.php" ?>
<?php include "navigation-front.php" ?>

<div role="main" class="main" itemscope itemtype="http://schema.org/CreativeWork">
    <section class="page-header page-header-modern bg-color-dark-scale-1 page-header-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="text-light">
                        <!--- <?php echo $page_name ?> ---> &nbsp;</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-4">
        <div class="row">            
            <?php include "sidebar-front.php" ?>
            <div class="col-lg-9" itemprop="text">
                <?php echo $content ?>
            </div>
        </div>
    </div>
</div>


<?php include "footer-front.php" ?>