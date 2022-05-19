<?php $col = 12; ?>
<?php include "header-front.php" ?>
<?php include "navigation-front.php" ?>

<div role="main" class="main">
    <div class="container">
        <div class="row py-4">

            <div class="col-lg-6">
                <div class="overflow-hidden mb-1">
                    <h1 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Ganti Password</strong></h1>
                </div>

                <div class="overflow-hidden mb-4 pb-3">
                    <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Pastikan data diri diisi dengan benar</p>
                </div>

                <?php echo form_open_multipart('guest/ganti_password/edit/do_update/', array('class' => 'form-horizontal', 'id' => 'form_sample_1')); ?>    
                <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
                    <strong>Sukses!</strong> Pesan kamu telah terkirim ke kami.
                </div>

                <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                    <strong>Error!</strong> Error dalam mengirimkan pesan.
                    <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                </div>
                <?php if ($this->session->flashdata('flash_message') <> '') { ?>
                    <div class="alert alert-info display">
                        <button class="close" data-close="alert"></button>
                        <?= $this->session->flashdata('flash_message') ?>
                    </div>
                    <?php
                }
                ?>
                <div class="form-row">


                    <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark text-2">Password Lama</label>
                        <input type="password" maxlength="100" class="form-control" name="plama">
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark text-2">Password Baru</label>
                        <input type="password" maxlength="100" class="form-control" name="pbaru">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <label class="font-weight-bold text-dark text-2">Konfirmasi Password</label>
                        <input type="password" maxlength="100" class="form-control" name="pkonf">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <input type="submit" value="Edit Informasi" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>


            
        </div>
    </div>
</div>

<?php include "footer-front.php" ?>