<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <?php echo form_open('spadmin/manage_pengguna/create', array('class' => 'form-horizontal', 'id' => 'form_sample_2')); ?>        
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Tambah Pengguna</h4>
                    </div>
                    <div class="modal-body">
                        <div class="scroller" style="height:350px" data-always-visible="1" data-rail-visible1="1">
                            <!-- BEGIN FORM-->
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    Masih ada kolom yang belum diisi!
                                </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button>
                                    Pengguna berhasil di tambahkan!
                                </div>
                                <div class="alert alert-info display">
                                    <button class="close" data-close="alert"></button>
                                    Semua kolom harus diisi!
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">
                                        Username 
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control"  data-required="1" name="username" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">
                                        Nama Pegawai 
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="nama" data-required="1" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">
                                        Password 
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="password" class="form-control" name="password" data-required="1" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">
                                        Konfirmasi Password 
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="password" class="form-control" name="kpassword" data-required="1" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">
                                        Hak Akses 
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <select name="level" id="level" class="form-control" data-required="1" required>
                                                <option value="">--</option>    
                                                <option value="2">Pegawai</option>         
                                                <option value="1">Super Administrator</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn default">Close</button>
                        <button type="submit" class="btn green">Submit</button>
                    </div>
                    <?php echo form_close(); ?>   
                </div>
            </div>
        </div>            
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i><a href="<?php echo base_url(); ?>spadmin/dashboard">Dashboard</a><i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>spadmin/manage_pengguna">Pengguna Sistem</a>
                    <?php if (isset($edit_profile)) echo "<i class='fa fa-angle-right'></i>"; ?>
                </li>
                <?php if (isset($edit_profile)) { ?>
                    <li>
                        <a href="#">Edit Pengguna Sistem</a>
                    </li>    
                <?php } ?>
            </ul>

        </div>
        <!-- END PAGE HEADER-->
        <?php
        if (isset($edit_profile)) {
            $row = $edit_profile[0];
            ?>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Edit Pengguna System
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <?php echo form_open('spadmin/manage_pengguna/edit/do_update/' . $row->pengguna_id, array('class' => 'form-horizontal', 'id' => 'form_sample_1')); ?>    
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    You have some form errors. Please check below.
                                </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button>
                                    Your form validation is successful!
                                </div>
                                <?php echo $this->session->flashdata('flash_message'); ?>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Username</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name" readonly class="form-control" value="<?php echo $row->username ?>"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Nama Pegawai <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input name="nama" type="text" class="form-control" value="<?php echo $row->nama ?>" required=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Hak Akses <span class="required">*</span></label>
                                    <div class="col-md-2">
                                        <select class="form-control" name="level">
                                            <?php if ($row->level == "1") { ?>   
                                                <option value="2">Pegawai</option>         
                                                <option value="1" selected>Super Administrator</option>    
                                            <?php } else {
                                                ?> 
                                                <option value="2" selected>Pegawai</option>         
                                                <option value="1">Super Administrator</option>    
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit"  class="btn green" >Submit</button>
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
                                <i class="fa fa-globe"></i>Pengguna Sistem
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
                                            <a id="sample_editable_1_new" class="btn green" href="#responsive" data-toggle="modal">
                                                Add New <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
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
                                        <th >Username</th>
                                        <th >Nama</th>
                                        <th >Hak Akses</th>
                                        <th style="width:100px;">Reset Password</th>
                                        <th style="width:100px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($user != null) {
                                        $no = 0;
                                        foreach ($user as $row):
                                            $no++;
                                            ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $row->username ?></td>
                                                <td ><?php echo $row->nama ?></td>
                                                <td>
                                                    <?php
                                                    if ($row->level == "1") {
                                                        echo "Super Admin";
                                                    } else {
                                                        echo "Pegawai";
                                                    }
                                                    ?>
                                                </td>
                                                <td><a href="<?php echo base_url() . "spadmin/manage_pengguna/reset/" . $row->pengguna_id; ?>"><button class="btn blue-madison">Reset Password</button></a></td>
                                                <td style="text-align:right;">
                                                    <a href="<?php echo base_url(); ?>spadmin/manage_pengguna/edit/<?php echo $row->pengguna_id; ?>" class="btn btn-sm blue tooltips" title="Edit Content"><i class="fa fa-edit"></i></a>
                                                    <a href="<?php echo base_url(); ?>spadmin/manage_pengguna/delete/<?php echo $row->pengguna_id; ?>" onclick="return confirm('Are you sure want to delete this data?')" class="btn btn-sm red tooltips" title="Delete Content"><i class="fa fa-trash-o"></i></a>                                                   
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
