<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php if(isset($title)){ echo $title; }?></title>

        <!-- Local Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

        <!-- Local Bootstrap - Optional theme -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css">

        <!-- Site Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">

        <!-- Site Fonts -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fonts.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    </head>
    <body>
        <nav id="navigation" class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-collapse">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">dragoshi</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php if(current_url() !== base_url()){echo base_url();}?>#Home">Home</a>
                        </li>
                        <li>
                            <a href="<?php if(current_url() !== base_url()){echo base_url();}?>#About">About</a>
                        </li>
                        <li>
                            <a href="<?php if(current_url() !== base_url()){echo base_url();}?>#Gallery">Gallery</a>
                        </li>
                        <li>
                            <a href="<?php if(current_url() !== base_url()){echo base_url();}?>#Blog">Blog</a>
                        </li>
                        <li>
                            <a href="<?php if(current_url() !== base_url()){echo base_url();}?>#Contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
