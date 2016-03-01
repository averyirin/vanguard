    <?php
    //products include
    //     ../account/login.php
    //index include
    //     account/login.php

     include($app_path."account/login-homepage.php");?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="all,follow" name="robots">
    <meta content="index,follow,snippet,archive" name="googlebot">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Vanguard Sensors</title>
    <meta content="" name="keywords">
    <link href=
    'http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800'
    rel='stylesheet' type='text/css'><!-- Bootstrap and Font Awesome css -->
    <link href="<?php echo $app_path ?>css/font-awesome.css"
    rel="stylesheet">
    <link href="<?php echo $app_path ?>css/bootstrap.min.css" rel=
    "stylesheet"><!-- Css animations  -->
    <link href="<?php echo $app_path ?>css/animate.css" rel="stylesheet">
    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="<?php echo $app_path ?>css/style.default.css" id="theme-stylesheet" rel="stylesheet">
    <!-- Custom stylesheet - for your changes -->
    <link href="<?php echo $app_path ?>css/custom.css" rel="stylesheet">
    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- Favicon and apple touch icons-->
    <link href="<?php echo $app_path ?>img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo $app_path ?>img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="<?php echo $app_path ?>img/apple-touch-icon-57x57.png" rel="apple-touch-icon" sizes=
    "57x57">
    <link href="<?php echo $app_path ?>img/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes=
    "72x72">
    <link href="<?php echo $app_path ?>img/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes=
    "76x76">
    <link href="<?php echo $app_path ?>img/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes=
    "114x114">
    <link href="<?php echo $app_path ?>img/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes=
    "120x120">
    <link href="<?php echo $app_path ?>img/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes=
    "144x144">
    <link href="<?php echo $app_path ?>img/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes=
    "152x152"><!-- owl carousel css -->
    <link href="<?php echo $app_path ?>css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo $app_path ?>css/owl.theme.css" rel="stylesheet">
</head>
<body>
    <div id="all">
        <header>
        <!-- *** TOP ***
_________________________________________________________ -->
        <div id="top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-5 contact">
                        <p class="hidden-sm hidden-xs">Contact us on +1 705 718
                        4255 or vanguardcleaningsensors@gmail.com.</p>
                        <p class="hidden-md hidden-lg"><a data-animate-hover=
                        "pulse" href="#"><i class="fa fa-phone"></i></a>
                        <a data-animate-hover="pulse" href="#"><i class=
                        "fa fa-envelope"></i></a></p>
                    </div>
                    <div class="col-xs-7">
                        <div class="social">
                            <a class="external facebook" data-animate-hover=
                            "pulse" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="external gplus" data-animate-hover=
                            "pulse" href="#"><i class=
                            "fa fa-google-plus"></i></a> <a class=
                            "external twitter" data-animate-hover="pulse" href=
                            "#"><i class="fa fa-twitter"></i></a> <a class=
                            "email" data-animate-hover="pulse" href=
                            "#"><i class="fa fa-envelope"></i></a>
                        </div>
                        <div class="login">
                            <a data-target="#login-modal" data-toggle="modal"
                            href="#"><i class="fa fa-sign-in"></i> <span class=
                            "hidden-xs text-uppercase">Sign in</span></a>
                            <a href="<?php echo $app_path; ?>account/customer-register.php"><i class=
                            "fa fa-user"></i> <span class=
                            "hidden-xs text-uppercase">Sign up</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- *** TOP END *** -->
        <!-- *** NAVBAR ***
    _________________________________________________________ -->
        <div class="navbar-affixed-top" data-offset-top="200" data-spy="affix">
            <div class="navbar navbar-default yamm" id="navbar" role=
            "navigation">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand home" href=
                        "<?php echo $app_path; ?>index.php"><img alt="Vanguard logo" class=
                        "hidden-xs hidden-sm" src="<?php echo $app_path; ?>img/vanguard-logo.png">
                        <img alt="Vanguard logo" class="visible-xs visible-sm"
                        src="<?php echo $app_path; ?>img/vanguard-logo-small.png"><span class=
                        "sr-only">Vanguard - go to homepage</span></a>
                        <div class="navbar-buttons">
                            <button class="navbar-toggle btn-template-main"
                            data-target="#navigation" data-toggle="collapse"
                            type="button"><span class="sr-only">Toggle
                            navigation</span> <i class=
                            "fa fa-align-justify"></i></button>
                        </div>
                    </div><!--/.navbar-header -->
                    <div class="navbar-collapse collapse" id="navigation">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown  <?php if($current_page=="home") echo "active";?>">


                                <a href="<?php echo $app_path; ?>index.php">Home</a>
                           </li>
                            <li class="dropdown 
                            <?php if($current_page=="about") echo "active";?>">
                            <a href="<?php echo $app_path; ?>about.php">About Us</a>
                            </li>
                            <li class="dropdown  
                            <?php if($current_page=="products") echo "active";?>">

                             <a href="<?php echo $app_path; ?>catalog/products.php">Products</a>
                            </li>
                            <li class="dropdown 
                            <?php if($current_page=="contact") echo "active";?>">
                            <a href="<?php echo $app_path; ?>contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                    <div class="collapse clearfix" id="search">
                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input class="form-control" placeholder=
                                "Search" type="text"> <span class=
                                "input-group-btn"><button class=
                                "btn btn-template-main" type=
                                "submit"><span class=
                                "input-group-btn"><i class="fa fa-search"></i></span></button></span>
                            </div>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div><!-- /#navbar -->
        </div><!-- *** NAVBAR END *** -->
    </header>
