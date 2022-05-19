<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">     
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i><a href="<?php echo base_url(); ?>spadmin/dashboard">Dashboard</a><i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>spadmin/manage_halaman_tambahan">Halaman Tambahan</a>
                    <?php if (isset($edit_ukm)) echo "<i class='fa fa-angle-right'></i>"; ?>
                </li>
                <?php if (isset($edit_ukm)) { ?>
                    <li>
                        <a href="#">Edit Pengantar Direktur</a>
                    </li>    
                <?php } ?>
            </ul>
        </div>
        <?php if (isset($add_halaman)) {
            ?>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Tambah Halaman Tambahan
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <?php echo form_open('spadmin/manage_halaman_tambahan/create/do_create/', array('class' => 'form-horizontal', 'id' => 'form_sample_1')); ?>    
                            <div class="form-body">

                                <?php if ($this->session->flashdata('flash_message') <> '') { ?>
                                    <div class="alert alert-success display">
                                        <button class="close" data-close="alert"></button>
                                        <?= $this->session->flashdata('flash_message') ?>
                                    </div>
                                    <?php
                                }
                                ?>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Judul Halaman Tambahan <span class="required">*</span></label>
                                    <div class="col-md-4">
                                        <input type="text" name="judul" class="form-control" required=""/>
                                        <input type="hidden" name="bahasa" class="form-control" value="1"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Isi Halaman <span class="required">*</span></label>
                                    <div class="col-md-10">
                                        <textarea class="ckeditor form-control" name="isi" required="" rows="6" data-error-container="#editor2_error"></textarea>
                                        <div id="editor2_error">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Tanggal Post <span class="required">*</span></label>
                                    <div class="col-md-4">

                                        <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                            <input type="text" required="" class="form-control" name="tgl_post" readonly>
                                            <span class="input-group-btn">
                                                <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Meta Keyword <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" name="mkey" id="mkey" class="form-control" required=""/>
                                        <input type="hidden" name="tgl_post" id="tgl_post" required="" class="form-control" value="<?php echo date('d-m-Y') ?>"/>
                                        <span class="help-block">
                                            Meta keyword harus memiliki kata yang berasal dari judul dan meta description</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Meta Description <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <textarea name="mdesc" id="mdesc" rows="5" class="form-control" onkeyup="countChar(this)"></textarea>
                                        <span class="help-block" id="cekMeta">
                                            <font color="red">Jumlah karakter dari Meta Description minimal 120 karakter</font></span>
                                        <span class="help-block">
                                            Sisa <b><span id='charNum'>160</span></b> Karakter</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green" id="btnsimpan" disabled>Submit</button>
                                        <button type="button" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close(); ?>   
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>
            <?php
        } else if (isset($edit_halaman)) {
            $row = $edit_halaman[0];
            ?>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Edit Halaman Tambahan
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <?php echo form_open('spadmin/manage_halaman_tambahan/edit/do_update/' . $row->halaman_id, array('class' => 'form-horizontal', 'id' => 'form_sample_1')); ?>    
                            <div class="form-body">

                                <?php if ($this->session->flashdata('flash_message') <> '') { ?>
                                    <div class="alert alert-success display">
                                        <button class="close" data-close="alert"></button>
                                        <?= $this->session->flashdata('flash_message') ?>
                                    </div>
                                    <?php
                                }
                                ?>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Judul Halaman <span class="required">*</span></label>
                                    <div class="col-md-4">
                                        <input type="text" name="judul" required="" class="form-control" readonly="" value="<?php echo $row->judul ?>"/>
                                        <input type="hidden" name="bahasa" value="<?php echo $row->bahasa ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Isi Halaman <span class="required">*</span></label>
                                    <div class="col-md-10">
                                        <textarea class="ckeditor form-control" required="" name="isi" rows="6" data-error-container="#editor2_error"><?php echo $row->isi ?></textarea>
                                        <div id="editor2_error">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Tanggal Post <span class="required">*</span></label>
                                    <div class="col-md-4">

                                        <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                            <input type="text" class="form-control" required="" name="tgl_post" value="<?php echo date('d-m-Y', strtotime($row->tgl_post)) ?>" readonly>
                                            <span class="input-group-btn">
                                                <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Meta Keyword <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" name="mkey" id="mkey" class="form-control" value="<?php echo $row->meta_keyword ?>" required=""/>
                                        <input type="hidden" name="tgl_post" id="tgl_post" required="" class="form-control" value="<?php echo date('d-m-Y') ?>"/>
                                        <span class="help-block">
                                            Meta keyword harus memiliki kata yang berasal dari judul dan meta description</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Meta Description <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <textarea name="mdesc" id="mdesc" rows="5" class="form-control" onkeyup="countChar(this)"><?php echo $row->meta_desc ?></textarea>
                                        <span class="help-block" id="cekMeta">
                                            <font color="red">Jumlah karakter dari Meta Description minimal 120 karakter</font></span>
                                        <span class="help-block">
                                            Sisa <b><span id='charNum'><?php echo 160 - strlen($row->meta_desc) ?></span></b> Karakter</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green" id="btnsimpan" <?php
                                        if (strlen($row->meta_desc) < 120) {
                                            echo "disabled";
                                        }
                                        ?>>Submit</button>
                                        <button type="button" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close(); ?>   
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>
        <?php } else {
            ?>
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-globe"></i>Halaman Tambahan
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="btn-group">
                                            <a id="sample_editable_1_new" class="btn green" href="<?php echo base_url(); ?>spadmin/manage_halaman_tambahan/create" data-toggle="modal">
                                                Add New <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="btn-group pull-right">
                                            <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i></button>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="javascript:;">Print </a></li>
                                                <li><a href="javascript:;">Save as PDF </a></li>
                                                <li><a href="javascript:;">Export to Excel </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="sample_2">
                                <thead>
                                    <tr>
                                        <th style="width:12px;">NO</th>
                                        <th >Judul Halaman</th>
                                        <th >Link</th>
                                        <th style="width:100px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($tambahan != null) {
                                        $no = 0;
                                        foreach ($tambahan as $row):
                                            $no++;
                                            ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $row->judul ?></td>
                                                <td><?php echo base_url() . "page/" . encrypt($row->halaman_id); ?></td>
                                                <td style="text-align:left;">
                                                    <a href="<?php echo base_url(); ?>spadmin/manage_halaman_tambahan/edit/<?php echo $row->halaman_id; ?>" class="btn btn-sm blue tooltips" title="Edit Content"><i class="fa fa-edit"></i></a>
                                                    <a href="<?php echo base_url(); ?>spadmin/manage_halaman_tambahan/delete/<?php echo $row->halaman_id; ?>" onclick="return confirm('Are you sure want to delete this data?')" class="btn btn-sm red tooltips" title="Delete Content"><i class="fa fa-trash-o"></i></a>
                                                </td>
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
            <?php
        }
        ?>
    </div>
</div>
<!-- END CONTENT -->
