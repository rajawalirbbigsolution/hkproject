<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
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
        <div class="tabs mb-1" >
            <ul class="nav nav-tabs">
                <li class="nav-item active"><a class="nav-link" href="#popularPosts" data-toggle="tab"><i class="fas fa-star"></i>Katalog Populer</a></li>               
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="popularPosts">
                    <ul class="simple-post-list">
                        <?php
                        if (isset($lastberita) ) {
                            for ($i = 0; $i < count($lastberita); $i ++) {                                
                                ?>
                                <li>
                                    <div class="post-image">
                                        <div class="img-thumbnail d-block">
                                            <a href="<?php echo base_url() . "katalog_detail/" . encrypt($lastberita[$i]->item_id) . "/" . strtolower(str_replace(" ", "-", preg_replace('/\s+/', ' ', preg_replace('/[^a-zA-Z0-9\s+\']/', '', trim($lastberita[$i]->nama))))) ?>">
                                                <img alt="<?php echo $lastberita[$i]->nama ?>" src="<?php echo base_url() . $lastberita[$i]->file_name ?>" width="50">
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="post-info">
                                        <a href="<?php echo base_url() . "katalog_detail/" . encrypt($lastberita[$i]->item_id) . "/" . strtolower(str_replace(" ", "-", preg_replace('/\s+/', ' ', preg_replace('/[^a-zA-Z0-9\s+\']/', '', trim($lastberita[$i]->nama))))) ?>"><?php echo $lastberita[$i]->nama ?></a>
                                    <br><?php echo $lastberita[$i]->brand ?>
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