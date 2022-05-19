<?php $col = 12; ?>
<?php include "header-front.php" ?>
<?php include "navigation-front.php" ?>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=51955081075&text=Saya Ingin Bertanya Mengenai Katalog?" class="WAfloat" target="_blank">
        <i class="fa fa-whatsapp WA-float"></i>
    </a>
<div role="main" class="main">
    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div class="container">
        <div class="row py-4">
            <div class="col-lg-6">
                <div class="overflow-hidden mb-1">
                    <h1 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Daftar Member HAMAC</strong></h1>
                </div>
                
                <div class="overflow-hidden mb-4 pb-3">
                    <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Dapatkan akses katalog dengan menjadi member hamac</p>
                </div>

                <?php echo form_open('guest/register_member/create', array('class' => 'form-horizontal', 'id' => 'form_sample_2')); ?>        
                <?php if ($this->session->flashdata('flash_message') != ""): ?>
                        <div class="alert alert-danger ">
                            <button class="close" data-close="alert"></button>
                            <span>
                                <?= $this->session->flashdata('flash_message') ?></span>
                        </div>      
                    <?php endif; ?>    
                <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
                        <strong>Sukses!</strong> Pesan kamu telah terkirim ke kami.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                        <strong>Error!</strong> Error dalam mengirimkan pesan.
                        <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label class="required font-weight-bold text-dark text-2">Nama Lengkap</label>
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="nama" id="name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="required font-weight-bold text-dark text-2">Email</label>
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <label class="font-weight-bold text-dark text-2">Phone</label>
                            <input type="number" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="phone" id="subject" required>
                        </div>
                    </div>
                
                <div class="form-row">
                        <div class="form-group col">
                            <label class="font-weight-bold text-dark text-2">Perusahaan</label>
                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="perusahaan" id="subject" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <label class="required font-weight-bold text-dark text-2">Alamat</label>
                            <textarea maxlength="50" data-msg-required="Please enter your message." rows="2" class="form-control" name="alamat" id="message" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="font-weight-bold text-dark text-2">Password</label>
                            <input type="password" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="password" id="subject" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="font-weight-bold text-dark text-2">Konfirmasi Password</label>
                            <input type="password" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="kpassword" id="subject" required>
                        </div>
                    </div>                                
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="submit" value="Daftar" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                        </div>
                    </div>
                <?php echo form_close(); ?>
                <br>
                <div class="overflow-hidden mb-4 pb-3">
                    <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400"><b>Kenapa Harus Menjadi Member Hamac ?</b><br>Dengan menjadi member HAMAC, dapatkan akses untuk mendownload katalog tanpa batas.</p>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php include "footer-front.php" ?>