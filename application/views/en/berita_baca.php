<?php include "header-en.php" ?>
<?php include "navigation-en.php" ?>
<?php $row = $berita; ?>
<div role="main" class="main">
    <section class="section section-tertiary section-no-border pb-3 mt-0">
        <div class="container">
            <div class="row justify-content-end mt-4">
                <div class="col-lg-10 pt-4 mt-4 text-right">
                    <h4>&nbsp;</h4>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row pt-2" itemscope itemtype="http://schema.org/CreativeWork">
            <div class="col-lg-3">
                <aside class="sidebar">
                    <?php echo form_open('search', array('target' => '_blank')); ?> 
                        <div class="input-group input-group-4">
                            <input class="form-control" placeholder="Search..." name="keywords" id="s" type="text">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-search"></i></button>
                            </span>
                        </div>
                    <?php echo form_close();?>
                    <hr>
                    <h4 class="heading-primary">Information</h4>
                    <ul class="nav nav-list flex-column mb-5">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>en/news">News</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>en/services">Job Vacancy</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>en/csr">CSR</a></li>
                    </ul>

                    <div class="tabs mb-5">
                        <ul class="nav nav-tabs">
                            <li class="nav-item active"><a class="nav-link" href="#popularPosts" data-toggle="tab"><i class="fas fa-star"></i> Newest</a></li>
                            <li class="nav-item"><a class="nav-link" href="#recentPosts" data-toggle="tab">Oldest</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="popularPosts">
                                <ul class="simple-post-list">
                                    <?php
                                    if (isset($lastberita)) {
                                        for ($i = 0; $i < count($lastberita); $i ++) {
                                            $tgl = date("d M Y", strtotime($lastberita[$i]->tgl_post));
                                            $hari = date("l", strtotime($lastberita[$i]->tgl_post));
                                            ?>
                                            <li>
                                                <div class="post-image">
                                                    <div class="img-thumbnail d-block">
                                                        <a href="<?php echo base_url() . "en/read/" . encrypt($lastberita[$i]->artikel_id) . "/" . strtolower(str_replace(" ", "-", preg_replace('/\s+/', ' ', preg_replace('/[^a-zA-Z0-9\s+\']/', '', trim($lastberita[$i]->judul))))) ?>">
                                                            <img alt="<?php echo $lastberita_title[$i] ?>" src="<?php echo $lastberita_thumb[$i] ?>" width="50">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="<?php echo base_url() . "en/read/" . encrypt($lastberita[$i]->artikel_id) . "/" . strtolower(str_replace(" ", "-", preg_replace('/\s+/', ' ', preg_replace('/[^a-zA-Z0-9\s+\']/', '', trim($lastberita[$i]->judul))))) ?>"><?php echo $lastberita[$i]->judul ?></a></a>
                                                    <div class="post-meta">
                                                        <?php echo date('d', strtotime($lastberita[$i]->tgl_post)) . " " . bulan_simple(date('M', strtotime($lastberita[$i]->tgl_post))) . " " . date('Y', strtotime($lastberita[$i]->tgl_post)); ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="tab-pane" id="recentPosts">
                                <ul class="simple-post-list">
                                    <?php
                                    if (isset($prevberita)) {
                                        for ($i = 0; $i < count($prevberita); $i ++) {
                                            $tgl = date("d M Y", strtotime($prevberita[$i]->tgl_post));
                                            $hari = date("l", strtotime($prevberita[$i]->tgl_post));
                                            ?>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail d-block">
                                                <a href="<?php echo base_url() . "en/read/" . encrypt($prevberita[$i]->artikel_id) . "/" . strtolower(str_replace(" ", "-", preg_replace('/\s+/', ' ', preg_replace('/[^a-zA-Z0-9\s+\']/', '', trim($prevberita[$i]->judul))))) ?>">
                                                    <img src="<?php echo $prevberita_thumb[$i] ?>" alt = "<?php echo $prevberita_title[$i] ?>" width="50">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="<?php echo base_url() . "en/read/" . encrypt($prevberita[$i]->artikel_id) . "/" . strtolower(str_replace(" ", "-", preg_replace('/\s+/', ' ', preg_replace('/[^a-zA-Z0-9\s+\']/', '', trim($prevberita[$i]->judul))))) ?>"><?php echo $prevberita[$i]->judul;?></a>
                                            <div class="post-meta">
                                                 <?php echo harifull($hari) . ", $tgl" ?> 
                                            </div>
                                        </div>
                                    </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-9">
                <div class="blog-posts single-post mt-4">
                    <article class="post post-large blog-single-post">
                        <div class="post-date">
                            <?php if($row->jenisartikel_id!=5){?>
                            <span class="day"><?php echo date("d",strtotime($row->tgl_post))?></span>
                            <span class="month"><?php echo date("M",strtotime($row->tgl_post)) ?></span>
                            <?php } ?>
                        </div>
                        <div class="post-content">
                            <h1 class="mb-3" itemprop="headline"><?php echo $row->judul ?></h1>
                            <div class="post-meta" itemprop="author" itemscope itemtype="http://schema.org/Person">
                                <span itemprop="name"><i class="fas fa-user"></i> By <?php echo $author[0] ?> </span>
                                <!--<span><i class="fas fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>-->
                                <?php if($row->jenisartikel_id!=5){?><span itemprop="dateModified"><i class="fas fa-calendar"></i> <time itemprop="dateModified" datetime="<?php echo date('Y-m-d\Th:i:s', strtotime($row->tgl_post)) . "+00:00" ?>"><?php echo date('d/m/Y', strtotime($row->tgl_post)) ?></time></span><?php } ?>
                            </div>
                            <img src="<?php echo $artikel_thumb[0]; ?>" alt="Gambar <?php echo $row->judul; ?>" class="img-fluid float-right mb-3 mb-1 ml-sm-4 ml-lg-5" alt="" >
                            <div itemprop="text">
                                <?php echo $row->isi; ?>
                            </div>
                            <div class="pt-2 pb-1">
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_pinterest_pinit"></a>
                                    <a class="addthis_counter addthis_pill_style"></a>
                                </div>
                                <!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>-->
                                <!-- AddThis Button END -->
                            </div>
                            <hr class="clearfix"/>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer-en.php" ?>