<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <!DOCTYPE html>
    <html class="no-js" lang="zxx">
    
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    
    <title>Car Rental Service</title>
    
    <!--=== Bootstrap CSS ===-->
    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css");?>">
    <!--=== Slicknav CSS ===-->
    <link href="<?= base_url("assets/css/plugins/slicknav.min.css");?>" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?= base_url("assets/css/plugins/magnific-popup.css");?>" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="<?= base_url("assets/css/plugins/owl.carousel.min.css");?>" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="<?= base_url("assets/css/plugins/gijgo.css");?>"  rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="<?= base_url("assets/css/font-awesome.css");?>"  rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?= base_url("assets/css/reset.css");?>"  rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?= base_url("assets/css/style.css");?>"  rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?= base_url("assets/css/responsive.css");?>"  rel="stylesheet">
    <!--=== Jquery-ui CSS===-->
    <link href="<?= base_url("assets/css/plugins/jquery-ui.min.css");?>"  rel="stylesheet">

    <!--=== Jquery Min Js ===-->
    <script src="<?= base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
    <!--=== Jquery-ui Js ===-->
    <script src="<?= base_url("assets/js/plugins/jquery-ui.js"); ?>"></script>
    <!--=== My Js ===-->
    <script src="<?= base_url("assets/js/forms.js"); ?>"></script>
    </head>
<!--  </body>
</html>-->
    
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--    </head>-->
    <body class="loader-active">
        <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="<?= base_url("assets/img/preloader.gif");?>" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->
    
     <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
    <!--== Header Top Start ==-->
    <div id="header-top" class="d-none d-xl-block">
    <div class="container">
    <div class="row">
    <!--== Single HeaderTop Start ==-->
    <div class="col-lg-3 text-left">
    <i class="fa fa-map-marker"></i>
    Nairobi West, Kenya
    </div>
    <!--== Single HeaderTop End ==-->
    
    <!--== Single HeaderTop Start ==-->
    <div class="col-lg-3 text-center">
    <i class="fa fa-mobile"></i>
    +254 725 127 193
    </div>
    <!--== Single HeaderTop End ==-->
    
    <!--== Single HeaderTop Start ==-->
    <div class="col-lg-3 text-center">
    <i class="far fa-clock"></i> Mon-Fri 09.00 - 17.00
    </div>
    <!--== Single HeaderTop End ==-->
    
    <!--== Social Icons Start ==-->
    <div class="col-lg-3 text-right">
    <div class="header-social-icons">
    <a href="#"><i class="fab fa-behance"></i></a>
    <a href="#"><i class="fab fa-pinterest"></i></a>
    <a href="#"><i class="fab fa-facebook"></i></a>
    <a href="#"><i class="fab fa-linkedin"></i></a>
    </div>
    </div>
    <!--== Social Icons End ==-->
    </div>
    </div>
    </div>
    <!--== Header Top End ==-->
    
    <!--== Header Bottom Start ==-->
    <div id="header-bottom">
    <div class="container">
    <div class="row">
    <!--== Logo Start ==-->
    <div class="col-lg-4">
    <a href="<?= base_url("customer/");?>" class="logo">
    <img src="<?= base_url("assets/img/logo.png");?>" alt="JSOFT">
    </a> 
    </div>
    <!--== Logo End ==-->
    
    <!--== Main Menu Start ==-->
    <div class="col-lg-8 d-none d-xl-block">
        <nav class="mainmenu alignright">
            <ul>
                <li class="active"><a href="<?= base_url("customer/");?>">Home</a></li>
            <!--    <li><a href="#">About</a></li>-->
            <!--    <li><a href="#">Services</a></li>-->
                <li><a href="#">Cars</a></li>
                <li><a href="<?= base_url("customer/contact_us");?>">Contact Us</a></li>
                <?php toggleNav();?>
            </ul>
        </nav>
    </div>
    <!--== Main Menu End ==-->
    </div>
    </div>
    </div>
    <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <script src="<?= base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
    
    <?php
    
    function toggleNav(){
        
        $data = "";
        
        if(isset($_SESSION['fname'])){
            $fname = $_SESSION['fname'];
          $data = '<li>
                        <a href="#" class="btn btn-sm btn-outline-light">'.$fname.'</a>
                        <ul>
                            <li>
                                <a href="'.base_url("customer/logout").'">Logout</a>
                            </li>
                        </ul>
                    </li>'; 
        }else{
           $data = '<li><a href="'.base_url("customer/login").'">Sign In</a></li>';
        }
        
        
        echo $data;
    }
    
  ?>
    