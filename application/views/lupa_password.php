<?php $col = 12; ?>
<?php include "header-front.php" ?>
<?php include "navigation-front.php" ?>

<div role="main" class="main">
    <div class="container">
        <div class="row py-4">
            <div class="col-lg-6">
                <div class="overflow-hidden mb-1">
                    <h1 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Reset Password Member</strong></h1>
                </div>
                <div class="overflow-hidden mb-4 pb-3">
                    <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Masukkan Email yang Terdaftar Sebagai Member Hamac</p>
                </div>
                <div class="login-content">
                    <?php echo form_open('guest/lupa_password/reset', array('class' => 'form-horizontal', 'id' => 'form_sample_2')); ?>        
                    <?php if ($this->session->flashdata('flash_messagee') != ""): ?>
                        <div class="alert alert-success">
                            <button class="close" data-close="alert"></button>
                            <span>
                                <?= $this->session->flashdata('flash_messagee') ?></span>
                        </div>      
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('flash_message') != ""): ?>
                        <div class="alert alert-danger ">
                            <button class="close" data-close="alert"></button>
                            <span>
                                <?= $this->session->flashdata('flash_message') ?></span>
                        </div>      
                    <?php endif; ?>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="required font-weight-bold text-dark text-2">Email</label>
                            <input data-msg-required="Please enter your email." maxlength="100" class="form-control" name="email" id="email" required>
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="form-group col-lg-6">
                            
                            <button class="btn btn-primary btn-modern" type="submit">Reset Password</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>  
                </div>
            </div>

        </div>
    </div>
</div>

<?php include "footer-front.php" ?>