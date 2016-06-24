<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MYSQL</title>
        <link href="<?php echo base_url(); ?>bower_components/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link  href="<?php echo base_url(); ?>assets/custom/style.css" rel="stylesheet">

        <script src="<?php echo base_url(); ?>bower_components/js/jquery-1.12.4.min.js"></script>
        <script  src="<?php echo base_url(); ?>bower_components/js/bootstrap.min.js"></script>
    </head>
    <body>
        <section id="menu_header">
            <nav class="navbar navbar-default">
                  <div class="container">
                    <div class="navbar-header navhead">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"    aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand link" href="#"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Project</a>  
                    </div>    
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="form-group">
                            <ul class="nav navbar-nav navbar-right">
                                <li><?php echo anchor("member","Home"); ?></li>
                                <li><?php echo anchor("member/show","Show"); ?></li>
                            </ul>
                        </div>  
                    </div>
                </nav>
        </section>


