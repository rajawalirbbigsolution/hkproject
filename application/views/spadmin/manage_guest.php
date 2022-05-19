<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i><a href="<?php echo base_url(); ?>spadmin/dashboard">Dashboard</a><i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>spadmin/manage_guest">Manage Guest</a>
                    <?php if (isset($edit_item) || isset($add_proyek) || isset($edit_katalog_item) || isset($add_katalog_item)) echo "<i class='fa fa-angle-right'></i>"; ?>
                </li>
                <li>
                    <?php if (isset($edit_item) || isset($edit_katalog_item)) { ?>
                        <a href="#">Edit Katalog</a> 
                    <?php } else if (isset($add_proyek) || isset($add_katalog_item)) { ?>
                        <a href="#">Tambah Katalog</a>
                    <?php }
                    ?>
                    <?php if (isset($edit_katalog_item) && !isset($edit_item) || isset($add_katalog_item)) echo "<i class='fa fa-angle-right'></i>"; ?>
                </li>   
                <?php if (isset($add_katalog_item)) { ?>
                    <li>
                        <a href="#">Tambah Katalog Item</a>
                    </li>    
                <?php } else if (isset($edit_katalog_item) && !isset($edit_item)) { ?>
                    <li>
                        <a href="#">Edit Katalog Item</a>
                    </li>    
                <?php }
                ?>
            </ul>
        </div>
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-globe"></i>Daftar Guest
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            
                            <?php if ($this->session->flashdata('flash_message') <> '') { ?>
                                <div class="alert alert-info display">
                                    <button class="close" data-close="alert"></button>
                                    <?= $this->session->flashdata('flash_message') ?>
                                </div>
                                <?php
                            }
                            ?>
                            <table class="table table-striped table-bordered table-hover" id="sample_2">
                                <thead>
                                    <tr>
                                        <th style="width:12px;">NO</th>
                                        <th >Email</th>
                                        <th >Nama</th>
                                        <th >Alamat</th>
                                        <th>Tgl Akses</th>
                                        <th>Perusahaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($item_guest != null) {
                                        $no = 0;
                                        foreach ($item_guest as $row):
                                            $no++;
                                            ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $row->email ?></td>
                                                <td ><?php echo $row->name ?></td>
                                                <td ><?php echo $row->nama ?></td>
                                                <td ><?php echo $row->tgl_akses ?></td>
                                                <td ><?php echo $row->perusahaan ?></td>                                                
                                            </tr>
                                            <?php
                                        endforeach;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->                
    </div>
</div>
<!-- END CONTENT -->
