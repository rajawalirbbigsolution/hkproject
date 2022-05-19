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
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>en/jobvacancy">Job Vacancy</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>en/csr">CSR</a></li>
        </ul>

        <div class="tabs mb-5">
            <ul class="nav nav-tabs">
                <li class="nav-item active"><a class="nav-link" href="#popularPosts" data-toggle="tab"><i class="fas fa-star"></i> Up to Date</a></li>
               
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
                
            </div>
        </div>
    </aside>
</div>