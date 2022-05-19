<?php include "header-en.php" ?>
<?php include "navigation-en.php" ?>
<?php $col = 12; ?>

<div role="main" class="main">
    <section class="section section-tertiary section-no-border pb-3 mt-0">
        <div class="container">
            <div class="row justify-content-end mt-4">
                <div class="col-lg-10 pt-4 mt-4 text-right">
                    <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Contact Vadhana International</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row pt-4 mb-4">
             <?php //BEGIN CONTENT?>
            <div class="col-md-12 col-sm-12">
                <div class="content-page">
                    <div class="row margin-bottom-30">
                        <div class="col-md-12">
                            <div class="content-page">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="map" class="gmaps margin-bottom-40" style="height:400px;">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.652023451209!2d101.41825731471589!3d0.523123999618351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a60f49f3c839%3A0x2392bc45252adff7!2sPT.+Vadhana+International!5e0!3m2!1sid!2sid!4v1538464520896" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9" id="pertanyaan">
                                        <h2>Contact Us</h2>
                                        <p class="lead mb-4 mt-1">Contact us or use the send message below to find out how we can help you.</p>
                                        <?php
                                        $row = $data_contact[0];
                                        ?>

                                        <?php if ($this->session->flashdata('flash_message') <> '') { ?>
                                            <div class="alert alert-info display">
                                                <button class="close" data-close="alert"></button>
                                                <?= $this->session->flashdata('flash_message') ?>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                        <?php //BEGIN FORM?>
                                        <?php echo form_open_multipart('guest_en/kontak/pesan/' . encrypt(2)); ?>    
                                        <div class="form-group">
                                            <label for="contacts-name">Name</label>
                                            <input type="text" name="nama" class="form-control" id="contacts-name" value="<?php
                                            if ($this->session->flashdata('nama') <> '') {
                                                echo $this->session->flashdata('nama');
                                            }
                                            ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="contacts-email">Email</label>
                                            <input type="email" name="email" class="form-control" id="contacts-email" value="<?php
                                            if ($this->session->flashdata('email') <> '') {
                                                echo $this->session->flashdata('email');
                                            }
                                            ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="contacts-message">Message</label>
                                            <textarea class="form-control" name="pesan" rows="5" id="contacts-message"><?php
                                                if ($this->session->flashdata('pesan') <> '') {
                                                    echo $this->session->flashdata('pesan');
                                                }
                                                ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <?php echo $captcha // tampilkan recaptcha   ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Send</button>
                                        <button type="button" class="btn btn-default">Cancel</button>
                                        <?php echo form_close(); ?>
                                        <?php //END FORM  ?>
                                    </div>

                                    <div class="col-md-3 col-sm-3 sidebar2">
                                        <h2>Our Contact</h2>
                                        <address>
                                            <strong>Vadhana International</strong><br>
                                            <?php echo nl2br($row->alamat) ?><br><br>
                                            <img src="<?php echo base_url() ?>assets/images/icons/telp.png" width="15"> &nbsp;<?php echo $row->telp ?> <br>
                                            <img src="<?php echo base_url() ?>assets/images/icons/fax.png" width="15"> &nbsp;<?php echo $row->faks ?><br>
                                            <img src="<?php echo base_url() ?>assets/images/icons/mail2.png" width="15"> &nbsp;<a href="mailto:<?php echo $row->email ?>"><?php echo $row->email ?></a><br>
                                        </address>
                                        <?php
                                        if (isset($data_contact_tambahan)) {
                                            foreach ($data_contact_tambahan as $row1) {
                                                ?>
                                                <address>
                                                    <strong><?php echo $row1->bidang ?></strong><br>
                                                    <?php
                                                    if (!empty($row1->alamat)) {
                                                        echo nl2br($row1->alamat) . "<br><br>";
                                                    }

                                                    if (!empty($row1->telp)) {
                                                        echo '<img src="' . base_url() . 'assets/images/icons/telp.png" width="15"> &nbsp;' . $row1->telp . '<br>';
                                                    }
                                                    if (!empty($row1->faks)) {
                                                        echo '<img src="' . base_url() . 'assets/images/icons/fax.png" width="15"> &nbsp;' . $row1->faks . '<br>';
                                                    }
                                                    if (!empty($row1->phone)) {
                                                        echo '<img src="' . base_url() . 'assets/images/icons/phone.png" width="10"> &nbsp;' . $row1->phone . '<br>';
                                                    }
                                                    if (!empty($row1->email)) {
                                                        echo '<img src="' . base_url() . 'assets/images/icons/mail2.png" width="10"> &nbsp;' . $row1->email . '<br>';
                                                    }
                                                    ?>
                                                </address>
                                            <?php }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php //END INFO BLOCK  ?>   
                    </div>
                </div>
            </div>
            <?php //END CONTENT  ?>
        </div>

    </div>
</div>

<?php include "footer-en.php" ?>