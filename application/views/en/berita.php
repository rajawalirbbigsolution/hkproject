<?php include "header-en.php" ?>
<?php include "navigation-en.php" ?>
<div role="main" class="main">
    <section class="section section-tertiary section-no-border pb-3 mt-0">
        <div class="container">
            <div class="row justify-content-end mt-4">
                <div class="col-lg-10 pt-4 mt-4 text-right">
                    <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">
                        <?php
                        $col_lg = "col-lg-6";
                        if ($jenis == 'berita') {
                            echo "News " . $halaman;
                        } else if ($jenis == 'lowongan') {
                            echo "Job Vacancy" . $halaman;
                        } else if ($jenis == 'csr') {
                            echo "CSR " . $halaman;
                        } else if ($jenis == 'lelang') {
                            $col_lg = "col-lg-4";
                            echo "Goods Auction" . $halaman;
                        } else if ($jenis == 'penyewaan') {
                            $col_lg = "col-lg-4";
                            echo "Rental " . $halaman;
                        }
                        ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row mb-4">
            <?php
            if (isset($berita)) {
                $i = 0;
                foreach ($berita as $row) {
                    ?>
                    <div class="<?php echo $col_lg; ?>" itemscope itemtype="http://schema.org/CreativeWork">
                        <div class="recent-posts mt-4 mb-4">
                            <a href="<?php echo base_url() . "en/read/" . encrypt($row->artikel_id) . "/" . strtolower(str_replace(" ", "-", preg_replace('/\s+/', ' ', preg_replace('/[^a-zA-Z0-9\s+\']/', '', trim($row->judul))))) ?>">
                                <img class="img-fluid pb-3"  alt="<?php echo $row->judul ?>" src="<?php echo $artikel_thumb[$i] ?>">
                            </a>
                            <article class="post">
                                <div class="date">
                                    <?php if($jenis != 'penyewaan'){ ?>
                                    <span class="day"><?php echo date("d", strtotime($row->tgl_post)) ?></span>
                                    <span class="month"><?php echo date("M", strtotime($row->tgl_post)) ?></span>
                                    <?php } ?>
                                </div>
                                <h4 class="pt-3 pb-0 mb-0" itemprop="headline"><a class="text-color-dark" href="<?php echo base_url() . "en/read/" . encrypt($row->artikel_id) . "/" . strtolower(str_replace(" ", "-", preg_replace('/\s+/', ' ', preg_replace('/[^a-zA-Z0-9\s+\']/', '', trim($row->judul))))) ?>"><?php echo $row->judul ?></a></h4>
                                <p itemprop="author" itemscope itemtype="http://schema.org/Person">By <span itemprop="name"><?php echo $author[$i] ?></span></p>
                                <div itemprop="text">
                                    <p>
                                        <?php
                                        $deskripsi = explode('<div style="page-break-after: always"><span style="display:none">&nbsp;</span></div>', $row->isi);
                                        echo strip_tags($deskripsi[0]);
                                        ?>
                                    </p>
                                </div>
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
        <?php echo $links ?> 
    </div>
</div>
<?php include "footer-en.php" ?>