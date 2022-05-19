<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="Vadhana International Officcial Website" name="description"/>
        <meta content="" name="author"/>
        <?php include 'includes.php'; ?>
        <title><?php echo $page_title; ?> | <?php echo $system_title; ?></title>
        <!-- Favicon -->
       <link rel="shortcut icon" height="100%" type="image/png" href="<?= base_url() ?>assets/img/vav.png" />
        <link rel="apple-touch-icon" href="<?= base_url()?>assets/img/vav.png"/>
    </head>

    <body class="page-header-fixed page-quick-sidebar-over-content page-full-width">    
        <?php include $this->session->userdata('login_type') . '/navigation.php'; ?>       
        <div class="page-container">                   
            <?php 
                include $this->session->userdata('login_type') . '/' . $page_name . '.php'; 
                include $this->session->userdata('login_type') . '/quick-sidebar.php'; 
            ?>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>