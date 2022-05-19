<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">     
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i><a href="<?php echo base_url(); ?>spadmin/dashboard">Home</a><i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Ganti Password</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Ganti Password
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <?php echo form_open_multipart('spadmin/ganti_password/edit/do_update/', array('class' => 'form-horizontal', 'id' => 'form_sample_1')); ?>    
                        <div class="form-body">
                            <?php if ($this->session->flashdata('flash_message') <> '') { ?>
                                <div class="alert alert-info display">
                                    <button class="close" data-close="alert"></button>
                                    <?= $this->session->flashdata('flash_message') ?>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="form-group">
                                <label class="control-label col-md-3">Password Lama<span class="required">*</span></label>
                                <div class="col-md-4">
                                    <input type="password" name="plama" class="form-control"/>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label class="control-label col-md-3">Password Baru<span class="required">*</span></label>
                                <div class="col-md-4">
                                    <input type="password" name="pbaru" class="form-control"/>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label class="control-label col-md-3">Konfirmasi Password Baru<span class="required">*</span></label>
                                <div class="col-md-4">
                                    <input type="password" name="pkonf" class="form-control"/>
                                </div>
                            </div>                            
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green" >Submit</button>
                                    <!--<button type="button" class="btn default">Cancel</button>-->
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
    </div>
</div>
<!-- END CONTENT -->
