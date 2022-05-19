<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	
        <title><?php echo $page_title ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Vadhana">
        <?php if ($page_name <> '404') { ?>
            <meta content="<?php echo $page_description ?>" name="description">
            <meta content="<?php echo $page_keyword ?>" name="keywords">
            <meta name="robots" content="index, follow">            
            <?php if ($page_name == 'Beranda') { ?>
                <link rel="canonical" href="<?php echo base_url(); ?>" />	
                <link rel="shortlink" href="<?php echo base_url(); ?>" />
            <?php } else { ?>
                <link rel="canonical" href="<?php echo substr(base_url(), 0, -1) . $_SERVER['REQUEST_URI']; ?>" /> 
            <?php } ?>
            <meta property="og:site_name" content="vadhana.co.id">
            <meta property="og:title" content="<?php echo $page_title ?>">
            <meta property="og:description" content="<?php echo $page_description ?>">
            <meta property="og:type" content="<?php
            if ($page_name == 'Beranda') {
                echo 'website';
            } else {
                echo 'article';
            }
            ?>">
            <meta property="og:image" content="<?php echo $image ?>">
            <meta property="og:url" content="<?php echo $url ?>">
            <meta property="fb:admins" content="76248932533" />

            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:site" content="@VadhanaInt" />
            <meta name="twitter:creator" content="@VadhanaInt">
            <meta name="twitter:title" content="<?php echo $page_title ?>" />
            <meta name="twitter:description" content="<?php echo $page_description ?>" />
            <meta name="twitter:image" content="<?php echo $image ?>" />
        <?php } ?>
        <script type='application/ld+json'>{"@context":"http://schema.org","@type":"WebSite","@id":"#website","url":"<?php echo base_url(); ?>","name":"Vadhana International","alternateName":"Vadhana International (VDI)"}}</script>
        <script type='application/ld+json'>{"@context":"http://schema.org","@type":"Organization","url":"<?php echo base_url(); ?>","sameAs":["https://www.facebook.com/Vadhana.International","https://www.instagram.com/vadhanainternational","https://plus.google.com/+VadhanaInternational","https://www.youtube.com/c/VadhanaInternational","https://twitter.com/VadhanaInternational"],"@id":"#organization","name":"Vadhana International","logo":"<?php echo base_url(); ?>assets/frontend/img/demos/construction/logo-construction-small.png"}</script>

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/frontend/img/favicon.png" type="image/x-icon" />
        <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/frontend/img/favicon.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/font-awesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/animate/animate.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/simple-line-icons/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/owl.carousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/magnific-popup/magnific-popup.min.css">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/theme-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/theme-blog.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/theme-shop.css">

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/rs-plugin/css/layers.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/rs-plugin/css/navigation.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/nivo-slider/nivo-slider.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/nivo-slider/default/default.css">

        <!-- Demo CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/demos/demo-construction.css">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/skins/skin-construction.css"> 

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/custom.css">

        <!-- Head Libs -->
        <script src="<?php echo base_url(); ?>assets/frontend/vendor/modernizr/modernizr.min.js"></script>
        <?php 
        if($page_name =='Kontak Vadhana International'){
            echo $script_captcha; // javascript recaptcha 
        } ?>
    </head>
    <body data-spy="scroll" data-target="#sidebar" data-offset="120" itemscope itemtype="http://schema.org/WebPage">
        <div class="body">