<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>

        <!-- Local Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

        <!-- Local Bootstrap - Optional theme -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css">

        <!-- Local jQuery (necessary for Bootstraps JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

        <!-- Local Bootstrap - Latest compiled and minified JavaScript -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

        <!-- Local Bootstrap - Latest compiled and minified JavaScript -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

        <!-- Site Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <a class="navbar-brand" href="#">dragoshi</a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dragNav">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="dragNav">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>about">About</a></li>
                        <li><a href="<?php echo base_url(); ?>blog">Blog</a></li>
                        <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
