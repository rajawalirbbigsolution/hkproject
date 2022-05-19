</div>
<?php // END CONTAINER ?>
<?php // BEGIN FOOTER ?>
<div class="page-footer">
    <div class="page-footer-inner">
        <?php echo date("Y") ?> &copy; Hamac International System.
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<?php // END FOOTER ?>
<?php
if ($page_name == "dashboard" or $page_name == "manage_pengguna" or $page_name == "manage_member" or $page_name == "manage_guest" or $page_name == "manage_label" or $page_name == "manage_kategori_katalog" or $page_name == "manage_lowongan" or $page_name == "manage_berita"
        or $page_name == "manage_lelang" or $page_name == "manage_profil" or $page_name == "manage_layanan" or $page_name == "statistik" or $page_name == "statistik_katalog" or $page_name == "statistik_katalog_download" or $page_name == "ganti_password"
        or $page_name == "manage_csr" or $page_name == "media" or $page_name == "galeri" or $page_name == "partner" or $page_name == "manage_kontak"
        or $page_name == "manage_halaman_tambahan" or $page_name == "manage_slideshow" or $page_name == "log" or $page_name == "manage_proyek" or $page_name == "manage_penyewaan" or $page_name == "manage_katalog") {
    ?>
    <?php // BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) ?>
    <?php // BEGIN CORE PLUGINS ?>
    <script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script> 
    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <?php // IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip ?>
    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <?php // END CORE PLUGINS ?>
    <?php // BEGIN PAGE LEVEL PLUGINS ?>   
    <?php if ($page_name == "dashboard") { ?>    
        <script src="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <?php // IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support ?>
        <script src="<?php echo base_url(); ?>assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-easypiechart/jquery.easypiechart.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <?php
    } else if ($page_name == "manage_pengguna" or $page_name == "manage_member" or $page_name == "manage_guest" or $page_name == "manage_label" or $page_name == "manage_kategori_katalog" or $page_name == "manage_lowongan" or $page_name == "manage_berita"
            or $page_name == "manage_lelang" or $page_name == "manage_profil" or $page_name == "manage_layanan" or $page_name == "manage_komentar" or $page_name == "statistik" or $page_name == "statistik_katalog" or $page_name == "statistik_katalog_download"
            or $page_name == "manage_csr" or $page_name == "media" or $page_name == "galeri" or $page_name == "partner" or $page_name == "komentar"
            or $page_name == "manage_kontak" or $page_name == "manage_halaman_tambahan" or $page_name == "manage_slideshow" or $page_name == "log" or $page_name == "ganti_password" 
            or $page_name == "manage_proyek" or $page_name == "manage_katalog" or $page_name == "manage_penyewaan") {
        ?>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
        <?php // Form Validation-?>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-markdown/lib/markdown.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/icheck/icheck.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/jquery-mixitup/jquery.mixitup.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
        <?php
    }
    ?>
    <?php // END PAGE LEVEL PLUGINS ?> 

    <?php // BEGIN PAGE LEVEL SCRIPTS ?>
    <script src="<?php echo base_url(); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
    <?php
    if ($page_name == "dashboard") {
        $visit_chart = $this->Md_statistik->getPageVisitGroupbyDate();
        ?>
        <script src="<?php echo base_url(); ?>assets/admin/pages/scripts/index.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>    
        <?php //Resources ?>
        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="https://www.amcharts.com/lib/3/serial.js"></script>
        <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
        <?php //chart visitor?>
        <style>
            #visitor {
                width		: 100%;
                height		: 300px;
                font-size	: 11px;
            }		
            #visit {
                width		: 100%;
                height		: 300px;
                font-size	: 11px;
            }			
        </style>
        <script>
            var chart = AmCharts.makeChart("visitor", {
            "type": "serial",
                    "theme": "light",
                    "dataProvider": [
        <?php for ($i = 7; $i >= 0; $i--) { ?>
                        {
                        "dates": "<?php echo date("d/m/Y", strtotime($visit_chart[$i]->tanggal)) ?>",
                                "visits": <?php echo $visit_chart[$i]->jumlah ?>
                        }
            <?php
            if ($i > 0) {
                echo ",";
            }
        }
        ?>
                    ,
                    ],
                    "valueAxes": [{
                    "gridColor": "#FFFFFF",
                            "gridAlpha": 0.2,
                            "dashLength": 0
                    }],
                    "gridAboveGraphs": true,
                    "startDuration": 1,
                    "graphs": [{
                    "balloonText": "[[category]]: <b>[[value]]</b>",
                            "fillAlphas": 0.8,
                            "lineAlpha": 0.2,
                            "type": "column",
                            "valueField": "visits"
                    }],
                    "chartCursor": {
                    "categoryBalloonEnabled": false,
                            "cursorAlpha": 0,
                            "zoomable": false
                    },
                    "categoryField": "dates",
                    "categoryAxis": {
                    "gridPosition": "start",
                            "gridAlpha": 0,
                            "tickPosition": "start",
                            "tickLength": 20
                    },
                    "export": {
                    "enabled": true
                    }

            });</script>
        <?php // end chart visitor ?>

        <?php //chart visit?>

        <script>
            var chart = AmCharts.makeChart("visit", {
            "type": "serial",
                    "theme": "light",
                    "dataProvider": [
        <?php
        for ($i = 1; $i <= 12; $i++) {
            $visitor_chart = $this->Md_statistik->getPageVisitorbyMonth($i, date('Y'));
            ?>
                        {
                        "month": "<?php echo bulan_simple(date('M', mktime(0, 0, 0, $i, 10))); ?>",
                                "visits": <?php echo count($visitor_chart); ?>
                        }
            <?php
            if ($i < 12) {
                echo ",";
            }
        }
        ?>],
                    "valueAxes": [{
                    "gridColor": "#FFFFFF",
                            "gridAlpha": 0.2,
                            "dashLength": 0
                    }],
                    "gridAboveGraphs": true,
                    "startDuration": 1,
                    "graphs": [{
                    "balloonText": "[[category]]: <b>[[value]]</b>",
                            "fillAlphas": 0.8,
                            "lineAlpha": 0.2,
                            "type": "column",
                            "valueField": "visits"
                    }],
                    "chartCursor": {
                    "categoryBalloonEnabled": false,
                            "cursorAlpha": 0,
                            "zoomable": false
                    },
                    "categoryField": "month",
                    "categoryAxis": {
                    "gridPosition": "start",
                            "gridAlpha": 0,
                            "tickPosition": "start",
                            "tickLength": 20
                    },
                    "export": {
                    "enabled": true
                    }

            });</script>
        <?php //end chart visit?>
        <?php
    } else if ($page_name == "manage_pengguna" or $page_name == "manage_member" or $page_name == "manage_guest" or $page_name == "manage_label" or $page_name == "manage_kategori_katalog" or $page_name == "manage_lowongan" or $page_name == "manage_berita" or $page_name == "manage_penyewaan"
            or $page_name == "manage_lelang" or $page_name == "manage_profil" or $page_name == "manage_layanan" or $page_name == "statistik" or $page_name == "statistik_katalog" or $page_name == "statistik_katalog_download" or $page_name == "ganti_password"
            or $page_name == "manage_csr" or $page_name == "media" or $page_name == "galeri" or $page_name == "partner" or $page_name == "manage_kontak"
            or $page_name == "manage_halaman_tambahan" or $page_name == "manage_slideshow" or $page_name == "log" or $page_name == "manage_proyek" or $page_name == "manage_katalog" or $page_name == "manage_penyewaan") {
        ?>    
        <script src="<?php echo base_url(); ?>assets/admin/pages/scripts/table-managed.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/pages/scripts/form-validation.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/pages/scripts/portfolio.js"></script>

        <?php
        if ($page_name == "statistik" or $page_name == "statistik_katalog" or $page_name == "statistik_katalog_download") {

            $visit_chart = $this->Md_statistik->getPageVisitGroupbyDate();
            ?>
            <script src="<?php echo base_url(); ?>assets/admin/pages/scripts/index.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>    
            <?php // Resources ?>
            <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
            <script src="https://www.amcharts.com/lib/3/serial.js"></script>
            <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
            <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
            <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
            <?php //chart visitor?>
            <style>
                #visitor {
                    width		: 100%;
                    height		: 300px;
                    font-size	: 11px;
                }		
            </style>
            <script>
            var chart = AmCharts.makeChart("visitor", {
            "type": "serial",
                    "theme": "light",
                    "dataProvider": [
            <?php for ($i = 7; $i >= 0; $i--) { ?>
                        {
                        "dates": "<?php echo date("d/m/Y", strtotime($visit_chart[$i]->tanggal)) ?>",
                                "visits": <?php echo $visit_chart[$i]->jumlah ?>
                        }
                <?php
                if ($i > 0) {
                    echo ",";
                }
            }
            ?>
                    ,
                    ],
                    "valueAxes": [{
                    "gridColor": "#FFFFFF",
                            "gridAlpha": 0.2,
                            "dashLength": 0
                    }],
                    "gridAboveGraphs": true,
                    "startDuration": 1,
                    "graphs": [{
                    "balloonText": "[[category]]: <b>[[value]]</b>",
                            "fillAlphas": 0.8,
                            "lineAlpha": 0.2,
                            "type": "column",
                            "valueField": "visits"
                    }],
                    "chartCursor": {
                    "categoryBalloonEnabled": false,
                            "cursorAlpha": 0,
                            "zoomable": false
                    },
                    "categoryField": "dates",
                    "categoryAxis": {
                    "gridPosition": "start",
                            "gridAlpha": 0,
                            "tickPosition": "start",
                            "tickLength": 20
                    },
                    "export": {
                    "enabled": true
                    }

            });</script>
            <?php // end chart visitor ?>

            <?php
        }
    }
    ?>
    <?php // END PAGE LEVEL SCRIPTS ?>
    <script>
        jQuery(document).ready(function() {
        Metronic.init();
        Layout.init();
        QuickSidebar.init();
        Demo.init();
    <?php if ($page_name == "dashboard") { ?>
            Index.init();
            Index.initJQVMAP();
            Index.initCalendar();
            Index.initCharts();
            Index.initChat();
            Index.initMiniCharts();
            Index.initDashboardDaterange();
            Tasks.initDashboardWidget();
        <?php
    } else if ($page_name == "manage_pengguna" or $page_name == "manage_member" or $page_name == "manage_guest" or $page_name == "manage_label" or $page_name == "manage_kategori_katalog" or $page_name == "manage_lowongan" or $page_name == "manage_berita" or $page_name == "manage_penyewaan"
            or $page_name == "manage_lelang" or $page_name == "manage_profil" or $page_name == "manage_layanan" or $page_name == "statistik" or $page_name == "statistik_katalog" or $page_name == "statistik_katalog_download" or $page_name == "ganti_password" or $page_name == "manage_penyewaan"
            or $page_name == "manage_csr" or $page_name == "manage_kontak" or $page_name == "manage_halaman_tambahan" or $page_name == "manage_slideshow" or $page_name == "log" 
            or $page_name == "manage_proyek" or $page_name == "manage_katalog") {
        ?>
            $('#uploadgambar').click(function() {
            $("#upload").show();
            $("#pilih").hide();
            $('input[name=item]').val('upload');
            });
            $('#pilihgambar').click(function() {
            $("#upload").hide();
            $("#pilih").show();
            $('input[name=item]').val('media');
            });
            TableManaged.init();
            FormValidation.init();
    <?php } else if ($page_name == "media" or $page_name == "galeri" or $page_name == "partner") {
        ?>
            FormValidation.init();
            Portfolio.init();
        <?php
    }
    ?>
        });
    </script>
    <?php // END JAVASCRIPTS ?>

    <?php
}
?>    
<?php
// END JAVASCRIPTS ?>