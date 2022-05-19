<?php $col = 12; ?>
<footer id="footer">
    <div class="container">
        <div class="row py-3 my-1">
            <div class="col-md-5 col-lg-4 mb-5 mb-lg-0">
                <h5 class="text-3 mb-3">Navigasi</h5>
                <div class="row">
                    <div class="col-6">
                        <p class="mb-1"><a href="<?= base_url(); ?>" class="text-3 link-hover-style-1">Beranda</a></p>
                        <p class="mb-1"><a href="<?= base_url(); ?>profil" class="text-3 link-hover-style-1">Profil</a></p>
                        <p class="mb-1"><a href="<?= base_url(); ?>katalog" class="text-3 link-hover-style-1">Layanan</a></p>
                        <p class="mb-1"><a href="<?= base_url(); ?>katalog" class="text-3 link-hover-style-1">Katalog</a></p>
                        <p class="mb-1"><a href="<?= base_url(); ?>kontak" class="text-3 link-hover-style-1">Kontak</a></p>
                    </div>
                    <div class="col-6">
                        <p class="mb-1"><a href="<?= base_url(); ?>berita" class="text-3 link-hover-style-1">Berita</a></p>
                        <p class="mb-1"><a href="<?= base_url(); ?>login" class="text-3 link-hover-style-1">Member</a></p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h5 class="text-3 mb-3">Hamac International</h5>
                <ul class="list-unstyled mb-0">
                    <li class="media mb-3 pb-1">
                        <article class="d-flex">
                            <?php
                            $row = $data_contact[0];
                            ?>
                            <div class="media-body">
                                <div>
                                    <h6 class="text-3 text-color-light opacity-8 ls-0 mb-1">Email</h6>
                                    <span class="text-2 mb-0"><?php echo $row->email ?></span>
                                    <h6></h6>
                                    <h6 class="text-3 text-color-light opacity-8 ls-0 mb-1">Alamat</h6>
                                    <span class="text-2 mb-0"><?php echo nl2br($row->alamat) ?></span>
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Newsletter</h5>
                <div class="alert alert-success d-none" id="newsletterSuccess">
                    <strong>Success!</strong> You've been added to our email list.
                </div>
                <div class="alert alert-danger d-none" id="newsletterError"></div>
                <form id="newsletterForm" action="<?= base_url()?>subscribe" method="POST" class="mw-100">
                    <div class="input-group input-group-rounded">
                        <input class="form-control form-control-sm bg-light px-4 text-3" placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail" type="text">
                        <span class="input-group-append">
                            <button class="btn btn-primary text-color-light text-2 py-3 px-4" type="submit"><strong>SUBSCRIBE!</strong></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container py-2">
            <div class="row py-1">
                <div
                    class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                    <a href="<?php echo base_url(); ?>" class="logo pr-0 pr-lg-3">
                        <img alt="Hamac International" src="<?= base_url() ?>assets/img/footerhamac.png"
                             class="opacity-5" height="33">
                    </a>
                </div>
                <div
                    class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                    <p>PT HASTA INTERNATIONAL MACHINERY © <?php echo date("Y");?>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery/plug.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery/jq.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery/fun.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/popper/umd/popper.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/common/common.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery.validation/jquery.validate.min.js"></script>
<!--<script src="<?= base_url() ?>assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>-->
<script src="<?= base_url() ?>assets/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/vide/jquery.vide.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/vivus/vivus.min.js"></script>
<!-- Theme Base, Components and Settings -->
<script src="<?php echo base_url();?>assets/css/demos/demo-construction.js"></script>	
<script src="<?= base_url() ?>assets/js/theme.js"></script>
<!-- Current Page Vendor and Views -->
<script src="<?= base_url() ?>assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Theme Custom -->
<script src="<?= base_url() ?>assets/js/custom.js"></script>
<!-- Theme Initialization Files -->
<script src="<?= base_url() ?>assets/js/theme.init.js"></script>

<script src="<?= base_url() ?>assets/vendor/modernizr/modernizr.min.js"></script>

<script src="<?php echo base_url();?>assets/js/theme.min.js"></script>
</body>
</html>