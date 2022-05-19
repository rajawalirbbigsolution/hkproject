<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">       
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i><a href="<?php echo base_url(); ?>spadmin/dashboard">Dashboard</a><i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>spadmin/manage_katalog">Manage Katalog</a>
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

        <!-- END PAGE HEADER-->
        <?php if (isset($add_proyek)) {
            ?>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Tambah Katalog
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <?php echo form_open_multipart('spadmin/manage_katalog/create/do_create/', array('class' => 'form-horizontal', 'id' => 'fileupload')); ?>    
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
                                    <label class="control-label col-md-3">Nama Katalog <span class="required">*</span></label>
                                    <div class="col-md-4">
                                        <input type="text" name="nama" class="form-control" required=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Kategori <span class="required">*</span></label>
                                    <div class="col-md-4">
                                        <select name="kategori" class="form-control">
                                            <?php foreach ($kategori as $row) { ?>
                                                <option value="<?php echo $row->kategori_id ?>"><?php echo $row->kategori ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Brand <span class="required">*</span></label>
                                    <div class="col-md-4">
                                        <input type="text" name="brand" class="form-control" required=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Part Number <span class="required">*</span></label>
                                    <div class="col-md-4">
                                        <input type="text" name="part_number" class="form-control" required=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Berat <i>(Kilo gram)</i> <span class="required">*</span></label>
                                    <div class="col-md-4">
                                        <input type="number" name="berat" class="form-control" required=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Deskripsi</label>
                                    <div class="col-md-8">
                                        <div class="icheck-inline">
                                            <textarea class="ckeditor form-control" required="" name="deskripsi" rows="10" data-error-container="#editor2_error"></textarea>
                                            <div id="editor2_error">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="control-label col-md-3">Upload Gambar Katalog <span class="required">*</span></label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input accept=".png,.jpg,.jpeg" type="file" name="media[]" class="form-control" multiple=""/>
                                            <i>Format yang diizinkan <font color="red">gif, jpg, dan png</font> ukuran file maksimal <font color="red">2 MB</font></i><br>
                                            <i>Lebar maksimal gambar <font color="red">900 px</font> dan tinggi maksimal gambar <font color="red">600 px</font></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="control-label col-md-3">Upload File <span class="required">*</span></label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input accept=".pdf" type="file" name="file" class="form-control" multiple=""/>
                                            <i>Format yang diizinkan <font color="red">PDF</font> ukuran file maksimal <font color="red">2 MB</font></i><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green" >Submit</button>
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
        } else if (isset($edit_item)) {
            $row = $edit_item;
            ?>
            <!-- MODAL START -->
            <div id="gambar" class="modal fade" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <?php echo form_open_multipart('spadmin/manage_katalog/edit/do_update_image/' . $row->item_id, array('class' => 'form-horizontal', 'id' => 'form_sample_1')); ?>         
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Tambah Gambar Katalog </h4>
                        </div>
                        <div class="modal-body">
                            <div class="scroller" style="height:350px" data-always-visible="1" data-rail-visible1="1">
                                <!-- BEGIN FORM-->
                                <div class="form-body">
                                    <div class="alert alert-warning display">
                                        <b>Alert : </b>Jumlah gambar katalog yang dapat diupload bisa lebih dari 1
                                    </div>
                                    <label class="control-label col-md-3">Upload Gambar Katalog</label>
                                    <div class="col-md-9">
                                        <input type="file" name="media[]" class="form-control" multiple=""/><i> 
                                            <font color="red">*</font> Format yang diizinkan <font color="red">gif, jpg, dan png</font> ukuran file maksimal <font color="red">2 MB</font></i>
                                    </div>                           
                                </div>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn default">Close</button>
                            <button type="submit" class="btn green"><i class="fa fa-upload"></i> Upload</button>
                        </div>
                        <?php echo form_close(); ?>   
                    </div>
                </div>
            </div>   
            <!-- MODAL END -->

            <?php
            if (isset($edit_katalog_item)) {
                if (isset($edit_katalog_item)) {
                    foreach ($edit_katalog_item as $rowedit) {
                        ?>
                        <!-- MODAL START -->
                        <div id="edit<?php echo $rowedit->item_id ?>" class="modal fade" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <?php echo form_open_multipart('spadmin/manage_katalog/edit/do_edit_item/' . $rowedit->item_id, array('class' => 'form-horizontal', 'id' => 'form_sample_1')); ?>         
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                        <h4 class="modal-title">Edit Gambar Katalog </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="scroller" style="height:350px" data-always-visible="1" data-rail-visible1="1">
                                            <!-- BEGIN FORM-->
                                            <div class="form-body">
                                                <input type="hidden" name="proyek" id="proyek" class="form-control" value="<?php echo $rowedit->item_id ?>">                                
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">ALT Text</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="alt_teks" id="alt_teks" class="form-control" value="<?php echo $rowedit->alt_teks ?>">
                                                    </div>
                                                </div>                                   
                                            </div>
                                            <!-- END FORM-->
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" data-dismiss="modal" class="btn default">Close</button>
                                        <button type="submit" class="btn green" id="btnsubmit">Submit</button>
                                    </div>
                                    <?php echo form_close(); ?>   
                                </div>
                            </div>
                        </div>   
                        <!-- MODAL END -->
                        <?php
                    }
                }
            }
            ?>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Edit Katalog
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <?php echo form_open_multipart('spadmin/manage_katalog/edit/do_update/' . $row->item_id, array('class' => 'form-horizontal', 'id' => 'form_sample_1')); ?>    
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
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Judul Katalog<span class="required">*</span></label>
                                    <div class="col-md-4">
                                        <input type="text" name="nama" class="form-control" value="<?php echo $row->nama ?>"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Kategori <span class="required">*</span></label>
                                    <div class="col-md-4">
                                        <select name="kategori_id" class="form-control">
                                            <?php
                                            foreach ($kategori as $row_l) {
                                                ?>
                                                <option value="<?php echo $row_l->kategori_id ?>" <?php if ($row->kategori_id == $row_l->kategori) {
                                            echo "selected";
                                        } ?> > <?php echo $row_l->kategori ?> </option>
                                                <?php
                                            }
                                            ?>
                                        </select>                                      
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Brand<span class="required">*</span></label>
                                    <div class="col-md-4">
                                        <input type="text" name="brand" class="form-control" value="<?php echo $row->brand ?>"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Part Number<span class="required">*</span></label>
                                    <div class="col-md-4">
                                        <input type="text" name="part_number" class="form-control" value="<?php echo $row->part_number ?>"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Berat <i>(Kilo gram)</i><span class="required">*</span></label>
                                    <div class="col-md-4">
                                        <input type="number" name="berat" class="form-control" value="<?php echo $row->berat ?>"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Isi Artikel <span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <textarea class="ckeditor form-control" required="" name="deskripsi" rows="6" data-error-container="#editor2_error"><?php echo $row->deskripsi ?></textarea>
                                        <div id="editor2_error">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Gambar Katalog</label>
                                    <div class="col-md-9">
                                        <a id="sample_editable_1_new" href="#gambar" data-toggle="modal"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah Gambar</button></a>                                       
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <?php
                                        if (isset($edit_katalog_item))
                                            $jumlah = count($edit_katalog_item);
                                        if (isset($edit_katalog_item)) {
                                            foreach ($edit_katalog_item as $row1) {
                                                ?>
                                                <div class="col-sm-12 col-md-3">
                                                    <div class="thumbnail">
                                                        <img src="<?php echo base_url() . $row1->file_name ?>" alt="" style="height: 80px;">
                                                        <div class="caption">
                                                            <p>
                                                            <center>
            <!--                                                                <a href="#edit<?php echo $row1->item_id ?>" class="btn blue"  data-toggle="modal"><i class="fa fa-edit"></i> Edit</a>-->
                                                                <a href="<?php echo base_url(); ?>spadmin/manage_katalog/delete/katalog_item/<?php echo $row1->media_id; ?>" onclick="return confirm('Are you sure want to delete this data?')" class="btn red" title="Delete Content"><i class="fa fa-trash-o"></i> Hapus</a>                                                 
                                                            </center>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">File<span class="required"></span></label>
                                    <div class="col-md-4">
                                        <a href="<?php echo base_url() . $row->filename ?>"><?php echo base_url() . $row->filename ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-5 col-md-7">
                                        <button type="submit" class="btn green" >Submit</button>
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
        } else {
            ?>
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                        <?php if ($this->session->flashdata('flash_message') <> '') { ?>
                        <div class="alert alert-success display">
                            <button class="close" data-close="alert"></button>
                        <?= $this->session->flashdata('flash_message') ?>
                        </div>
                <?php }
                ?>
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-globe"></i>Katalog
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="btn-group">
                                            <a id="sample_editable_1_new" class="btn green" href="<?php echo base_url(); ?>spadmin/manage_katalog/create" data-toggle="modal">
                                                Add New <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                        <div class="btn-group">
                                            <a id="sample_editable_1_new" class="btn green" href="<?php echo base_url(); ?>spadmin/manage_guest" data-toggle="modal">
                                                Guest <i class="fa"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="sample_2">
                                <thead>
                                    <tr>
                                        <th style="width:12px;">NO</th>
                                        <th >Nama Katalog</th>
                                        <th >Brand</th>
                                        <th >filename</th>
                                        <th >Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($item != null) {
                                        $no = 0;
                                        foreach ($item as $row):
                                            $no++;
                                            ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $row->nama ?></td>
                                                <td><?php echo $row->brand ?></td>
                                                <td><?php echo $row->filename ?></td>
                                                <td style="text-align:right;">
                                                    <a href="<?php echo base_url(); ?>spadmin/manage_katalog/edit/<?php echo $row->item_id; ?>" class="btn btn-sm blue tooltips" title="Edit Content"><i class="fa fa-edit"></i></a>
                                                    <a href="<?php echo base_url(); ?>spadmin/manage_katalog/delete/<?php echo $row->item_id; ?>" onclick="return confirm('Are you sure want to delete this data?')" class="btn btn-sm red tooltips" title="Delete Content"><i class="fa fa-trash-o"></i></a>                                                   
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
