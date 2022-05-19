<?php
function linktag($address) {
    echo "<script src='" . base_url() . "assets/js/jquery-1.8.3.min.js'></script>	";
    echo "<link rel='stylesheet' type='text/css' href='" . base_url() . "$address' /> \n";
}

if ($page_name == "manage_lelang"  or $page_name == "manage_penyewaan" or $page_name == "manage_profil" or $page_name == "manage_testimoni" or $page_name == "manage_layanan" 
        or $page_name == "manage_halaman_tambahan" or $page_name == "manage_lowongan" or $page_name == "manage_berita" or $page_name == "manage_regular" or $page_name == "manage_regular" or $page_name == "manage_csr"
) {
    ?>
    <script>
        function countChar(val) {
            var len = val.value.length;
            if (len >= 160) {
                val.value = val.value.substring(0, 160);
            }

            if (len <= 160) {
                $('#charNum').text(160 - len);
            }
			
            if (len >= 120) {
                $("#btnsimpan").removeAttr('disabled');
                $("#cekMeta").html('');
            } else {
                $("#btnsimpan").attr('disabled', '');
                $("#cekMeta").html('<font color="red">Jumlah karakter dari Meta Description minimal 120 karakter</font>');
			}
        }
    </script>
    <?php
}
if ($page_name == "dashboard" or $page_name == "manage_pengguna" or $page_name == "manage_member" or $page_name == "manage_guest" or $page_name == "manage_member" or $page_name == "manage_guest" or $page_name == "manage_label" or $page_name == "manage_kategori_katalog" or $page_name == "manage_lowongan" 
        or $page_name == "manage_berita" or $page_name == "manage_regular" or $page_name == "manage_regular" or $page_name == "manage_lelang"  or $page_name == "manage_profil"  or $page_name == "manage_testimoni" 
        or $page_name == "manage_layanan" or $page_name == "log" or $page_name == "manage_proyek" or $page_name == "manage_katalog"  or $page_name == "manage_penyewaan"
        or $page_name == "manage_csr" or $page_name == "prodi" or $page_name == "pegawai" or $page_name == "media" or $page_name == "galeri" 
        or $page_name == "partner" or $page_name == "brosur" or $page_name == "komentar" or $page_name == "manage_kontak" 
        or $page_name == "manage_halaman_tambahan"  or $page_name == "manage_slideshow" or $page_name == "statistik" or $page_name == "statistik_katalog" or $page_name == "statistik_katalog_download" or $page_name == "ganti_password") {
    ?>
    <?php //BEGIN GLOBAL MANDATORY STYLES  ?>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <?php //END GLOBAL MANDATORY STYLES  ?>

    <?php //BEGIN PAGE LEVEL PLUGIN STYLES   ?>
    <?php if ($page_name == "dashboard") { ?>
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>    
        <?php
    } else if ($page_name == "manage_pengguna" or $page_name == "manage_member" or $page_name == "manage_guest" or $page_name == "manage_label" or $page_name == "manage_kategori_katalog" or $page_name == "manage_lowongan" or $page_name == "manage_berita" or $page_name == "manage_regular"
            or $page_name == "manage_lelang" or $page_name == "manage_profil" or $page_name == "manage_testimoni" or $page_name == "manage_layanan" 
            or $page_name == "manage_slideshow" or $page_name == "statistik" or $page_name == "statistik_katalog" or $page_name == "statistik_katalog_download"  or $page_name == "ganti_password" or $page_name == "manage_penyewaan"
            or $page_name == "manage_csr"  or $page_name == "media" or $page_name == "galeri" or $page_name == "partner" or $page_name == "komentar" 
            or $page_name == "manage_kontak" or $page_name == "manage_halaman_tambahan" or $page_name == "log" or $page_name == "manage_proyek" or $page_name == "manage_katalog") {
        ?>
        <?php //start datatable component ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/global/plugins/select2/select2.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/css/datepicker.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/global/css/components.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/global/css/plugins.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/global/plugins/icheck/skins/all.css"/>
        <?php //end datatable component ?>
        <?php
    }
    if ($page_name == "media" or $page_name == "galeri" or $page_name == "partner" ) {
        ?>

        <link href="<?php echo base_url(); ?>assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
        <?php
    }
    ?>
    <?php //END PAGE LEVEL PLUGIN STYLES ?>

    <?php //BEGIN PAGE STYLES   ?>
    <?php if ($page_name == "dashboard") { ?>
        <link href="<?php echo base_url(); ?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
        <?php
    } else if ($page_name == "media" or $page_name == "galeri" or $page_name == "partner" ) {
        ?>
        <link href="<?php echo base_url(); ?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/admin/pages/css/portfolio.css" rel="stylesheet" type="text/css"/>    
        <?php
    }
    if ($page_name == "manage_slideshow" or $page_name == "manage_proyek" or $page_name == "manage_katalog") {
        ?>
        <link href="<?php echo base_url(); ?>assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
    <?php } ?>
    <?php //END PAGE STYLES ?>

    <?php //BEGIN THEME STYLES   ?>
    <link href="<?php echo base_url(); ?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="<?php echo base_url(); ?>assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <?php //END THEME STYLES  ?>
    <?php
}
//////////LOADING SYSTEM SETTINGS FOR ALL PAGES AND ACCOUNTS/////////
$system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
?>


