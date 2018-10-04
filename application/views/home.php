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
    <i class="fa fa-clock-o"></i> Mon-Fri 09.00 - 17.00
    </div>
    <!--== Single HeaderTop End ==-->
    
    <!--== Social Icons Start ==-->
    <div class="col-lg-3 text-right">
    <div class="header-social-icons">
    <a href="#"><i class="fa fa-behance"></i></a>
    <a href="#"><i class="fa fa-pinterest"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
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
    <a href="index.html" class="logo">
    <img src="<?= base_url("assets/img/logo.png");?>" alt="JSOFT">
    </a>
    </div>
    <!--== Logo End ==-->
    
    <!--== Main Menu Start ==-->
    <div class="col-lg-8 d-none d-xl-block">
    <nav class="mainmenu alignright">
    <ul>
    <li class="active"><a href="#">Home</a>
    <ul>
    <li><a href="#">Home 1</a></li>
    <li><a href="#">Home 2</a></li>
    <li><a href="#">Home 3</a></li>
    </ul>
    </li>
    <li><a href="#">About</a></li>
    <li><a href="#">services</a></li>
    <li><a href="#">Cars</a>
    <ul>
    <li><a href="car-left-sidebar.html">Car Left Sidebar</a></li>
    <li><a href="car-right-sidebar.html">Car Right Sidebar</a></li>
    <li><a href="car-without-sidebar.html">Car Without Sidebar</a></li>
    <li><a href="car-details.html">Car Details</a></li>
    </ul>
    </li>
    <li><a href="index.html">Pages</a>
    <ul>
    <li><a href="package.html">Pricing</a></li>
    <li><a href="driver.html">Driver</a></li>
    <li><a href="faq.html">FAQ</a></li>
    <li><a href="gallery.html">Gallery</a></li>
    <li><a href="help-desk.html">Help Desk</a></li>
    <li><a href="login.html">Log In</a></li>
    <li><a href="register.html">Register</a></li>
    <li><a href="404.html">404</a></li>
    </ul>
    </li>
    <li><a href="#">Blog</a>
    <ul>
    <li><a href="article.html">Blog Page</a></li>
    <li><a href="article-details.html">Blog Details</a></li>
    </ul>
    </li>
    <li><a href="contact.html">Contact</a></li>
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
    
    <!--== Slider Area Start ==-->
    <section id="slider-area">
    <!--== slide Item One ==-->
    <div class="single-slide-item overlay">
    <div class="container">
    <div class="row">
    <div class="col-lg-5">
    <div class="book-a-car">
    <form action="index.html">
    <!--== Pick Up Location ==-->
    <div class="pickup-location book-item">
    <h4>PICK-UP LOCATION:</h4>
    <select class="custom-select">
    <option value='Baringo'>Baringo</option>
    <option value='Bomet'>Bomet</option>
    <option value='Bungoma'>Bungoma</option>
    <option value='Busia'>Busia</option>
    <option value='Elgeyo-Marakwet'>Elgeyo-Marakwet</option>
    <option value='Embu'>Embu</option>
    <option value='Garissa'>Garissa</option>
    <option value='Homa Bay'>Homa Bay</option>
    <option value='Isiolo'>Isiolo</option>
    <option value='Kajiado'>Kajiado</option>
    <option value='Kakamega'>Kakamega</option>
    <option value='Kericho'>Kericho</option>
    <option value='Kiambu'>Kiambu</option>
    <option value='Kilifi'>Kilifi</option>
    <option value='Kirinyaga'>Kirinyaga</option>
    <option value='Kisii'>Kisii</option>
    <option value='Kisumu'>Kisumu</option>
    <option value='Kitui'>Kitui</option>
    <option value='Kwale'>Kwale</option>
    <option value='Laikipia'>Laikipia</option>
    <option value='Lamu'>Lamu</option>
    <option value='Machakos'>Machakos</option>
    <option value='Makueni'>Makueni</option>
    <option value='Mandera'>Mandera</option>
    <option value='Marsabit'>Marsabit</option>
    <option value='Meru'>Meru</option>
    <option value='Migori'>Migori</option>
    <option value='Mombasa'>Mombasa</option>
    <option value="Murang'a">Murang'a</option>
    <option value='Nairobi City'>Nairobi City</option>
    <option value='Nakuru'>Nakuru</option>
    <option value='Nandi'>Nandi</option>
    <option value='Narok'>Narok</option>
    <option value='Nyamira'>Nyamira</option>
    <option value='Nyandarua'>Nyandarua</option>
    <option value='Nyeri'>Nyeri</option>
    <option value='Samburu'>Samburu</option>
    <option value='Siaya'>Siaya</option>
    <option value='Taita-Taveta'>Taita-Taveta</option>
    <option value='Tana River'>Tana River</option>
    <option value='Tharaka-Nithi'>Tharaka-Nithi</option>
    <option value='Trans Nzoia'>Trans Nzoia</option>
    <option value='Turkana'>Turkana</option>
    <option value='Uasin Gishu'>Uasin Gishu</option>
    <option value='Vihiga'>Vihiga</option>
    <option value='West Pokot'>West Pokot</option>
    <option value='wajir'>Wajir</option>
    </select>
    </div>
    <!--== Pick Up Location ==-->
    
    <!--== Pick Up Date ==-->
    <div class="pick-up-date book-item">
    <h4>PICK-UP DATE:</h4>
    <input id="startDate" placeholder="Pick Up Date" />
    
    <div class="return-car">
    <h4>Return DATE:</h4>
    <input id="endDate" placeholder="Return Date" />
    </div>
    </div>
    <!--== Pick Up Location ==-->
    
    <!--== Car Choose ==-->
    <div class="choose-car-type book-item">
    <h4>CHOOSE CAR TYPE:</h4>
    <select class="custom-select">
    <option selected>Select</option>
    <option value="1">BMW</option>
    <option value="2">Audi</option>
    <option value="3">Lexus</option>
    <option value="4">Subaru</option>
    <option value="5">Toyota</option>
    <option value="6">Nissan</option>
    </select>
    </div>
    <!--== Car Choose ==-->
    
    <div class="book-button text-center">
    <button class="book-now-btn">Book Now</button>
    </div>
    </form>
    </div>
    </div>
    
    <div class="col-lg-7 text-right">
    <div class="display-table">
    <div class="display-table-cell">
    <div class="slider-right-text">
    <h1>BOOK A CAR TODAY!</h1>
    <p>FOR AS LOW AS Kshs. 1000 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!--== slide Item One ==-->
    </section>
    <!--== Slider Area End ==-->
    
    <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
    <div class="container">
    <div class="row">
    <!-- Section Title Start -->
    <div class="col-lg-12">
    <div class="section-title  text-center">
    <h2>About us</h2>
    <span class="title-line"><i class="fa fa-car"></i></span>
    <p>Car Hire with Silicon Valley Season One</p>
    </div>
    </div>
    <!-- Section Title End -->
    </div>
    
    <div class="row">
    <!-- About Content Start -->
    <div class="col-lg-6">
    <div class="display-table">
    <div class="display-table-cell">
    <div class="about-content">
    <p>Welcome to Skyscanner comprehensive car hire search. We search hundreds of destinations and compare thousands of car hire deals to help you find your perfect drive at a low price.</p>
    
    <p>We'll help you make your trip as cheap as possible, so you're sure to hit the road smiling. Come drive with us.</p>
    <div class="about-btn">
    <a href="#">Book a Car</a>
    <a href="#">Contact Us</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- About Content End -->
    
    <!-- About Video Start -->
    <div class="col-lg-6">
    <div class="about-video">
    <iframe src="https://player.vimeo.com/video/121982328?title=0&byline=0&portrait=0"></iframe>
    </div>
    </div>
    <!-- About Video End -->
    </div>
    </div>
    </section>
    <!--== About Us Area End ==-->
    
    <!--== Partner Area Start ==-->
    <div id="partner-area">
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-12 text-center">
    <div class="partner-content-wrap">
    <!-- Single Partner Start -->
    <div class="single-partner">
    <div class="display-table">
    <div class="display-table-cell">
    <img src="<?= base_url("assets/img/partner/partner-logo-1.png");?>" alt="JSOFT">
    </div>
    </div>
    </div>
    <!-- Single Partner End -->
    
    <!-- Single Partner Start -->
    <div class="single-partner">
    <div class="display-table">
    <div class="display-table-cell">
    <img src="<?= base_url("assets/img/partner/partner-logo-2.png");?>" alt="JSOFT">
    </div>
    </div>
    </div>
    <!-- Single Partner End -->
    
    <!-- Single Partner Start -->
    <div class="single-partner">
    <div class="display-table">
    <div class="display-table-cell">
    <img src="<?= base_url("assets/img/partner/partner-logo-3.png");?>" alt="JSOFT">
    </div>
    </div>
    </div>
    <!-- Single Partner End -->
    
    <!-- Single Partner Start -->
    <div class="single-partner">
    <div class="display-table">
    <div class="display-table-cell">
    <img src="<?= base_url("assets/img/partner/partner-logo-4.png");?>" alt="JSOFT">
    </div>
    </div>
    </div>
    <!-- Single Partner End -->
    
    <!-- Single Partner Start -->
    <div class="single-partner">
    <div class="display-table">
    <div class="display-table-cell">
    <img src="<?= base_url("assets/img/partner/partner-logo-5.png");?>" alt="JSOFT">
    </div>
    </div>
    </div>
    <!-- Single Partner End -->
    
    <!-- Single Partner Start -->
    <div class="single-partner">
    <div class="display-table">
    <div class="display-table-cell">
        <img src="<?= base_url("assets/img/partner/partner-logo-1.png"); ?>"  alt="JSOFT">
    </div>
    </div>
    </div>
    <!-- Single Partner End -->
    
    <!-- Single Partner Start -->
    <div class="single-partner">
    <div class="display-table">
    <div class="display-table-cell">
    <img src="<?= base_url("assets/img/partner/partner-logo-4.png");?>"  alt="JSOFT">
    </div>
    </div>
    </div>
    <!-- Single Partner End -->
    </div>
    </div>
    </div>
    </div>
    </div>
    <!--== Partner Area End ==-->
    
    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
    <div class="container">
    <div class="row">
    <!-- Section Title Start -->
    <div class="col-lg-12">
    <div class="section-title  text-center">
    <h2>Our Services</h2>
    <span class="title-line"><i class="fa fa-car"></i></span>
    <p>Are you in dire need of these services? We have you covered.</p>
    </div>
    </div>
    <!-- Section Title End -->
    </div>
    
    
    <!-- Service Content Start -->
    <div class="row">
    <!-- Single Service Start -->
    <div class="col-lg-4 text-center">
    <div class="service-item">
    <i class="fa fa-taxi"></i>
    <h3>RENTAL CAR</h3>
    <p>We prode ourselves in providing the best rental services at budget friendly rates.</p>
    </div>
    </div>
    <!-- Single Service End -->
    
    <!-- Single Service Start -->
    <div class="col-lg-4 text-center">
    <div class="service-item">
    <i class="fa fa-cog"></i>
    <h3>CAR REPAIR</h3>
    <p>Car diagnostics, mechanical and electrical repairs. Keep your car running.</p>
    </div>
    </div>
    <!-- Single Service End -->
    
    <!-- Single Service Start -->
    <div class="col-lg-4 text-center">
    <div class="service-item">
    <i class="fa fa-phone"></i>
    <h3>CALL A DRIVER</h3>
    <p>No need to drive for a long distance if you are not a fan.</p>
    </div>
    </div>
    <!-- Single Service End -->
    </div>
    <!-- Service Content End -->
    </div>
    </section>
    <!--== Services Area End ==-->
    
    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
    <div class="container">
    <div class="row">
    <div class="col-lg-11 col-md-12 m-auto">
    <div class="funfact-content-wrap">
    <div class="row">
    <!-- Single FunFact Start -->
    <div class="col-lg-4 col-md-6">
    <div class="single-funfact">
    <div class="funfact-icon">
    <i class="fa fa-smile-o"></i>
    </div>
    <div class="funfact-content">
    <p><span class="counter">550</span>+</p>
    <h4>HAPPY CLIENTS</h4>
    </div>
    </div>
    </div>
    <!-- Single FunFact End -->
    
    <!-- Single FunFact Start -->
    <div class="col-lg-4 col-md-6">
    <div class="single-funfact">
    <div class="funfact-icon">
    <i class="fa fa-car"></i>
    </div>
    <div class="funfact-content">
    <p><span class="counter">250</span>+</p>
    <h4>CARS IN STOCK</h4>
    </div>
    </div>
    </div>
    <!-- Single FunFact End -->
    
    <!-- Single FunFact Start -->
    <div class="col-lg-4 col-md-6">
    <div class="single-funfact">
    <div class="funfact-icon">
    <i class="fa fa-bank"></i>
    </div>
    <div class="funfact-content">
    <p><span class="counter">50</span>+</p>
    <h4>office in cities</h4>
    </div>
    </div>
    </div>
    <!-- Single FunFact End -->
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!--== Fun Fact Area End ==-->
    
    <!--== Choose Car Area Start ==-->
    <section id="choose-car" class="section-padding">
    <div class="container">
    <div class="row">
    <!-- Section Title Start -->
    <div class="col-lg-12">
    <div class="section-title  text-center">
    <h2>Choose your Car</h2>
    <span class="title-line"><i class="fa fa-car"></i></span>
    <p>Pick what works for you.</p>
    </div>
    </div>
    <!-- Section Title End -->
    </div>
    
    <div class="row">
    <!-- Choose Area Content Start -->
    <div class="col-lg-12">
    <div class="choose-content-wrap">
    <!-- Choose Area Tab Menu -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular_cars" role="tab" aria-selected="true">popular Cars</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#newest_cars" role="tab" aria-selected="false">newest cars</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#office_map" role="tab" aria-selected="false">Our Office</a>
    </li>
    </ul>
    <!-- Choose Area Tab Menu -->
    
    <!-- Choose Area Tab content -->
    <div class="tab-content" id="myTabContent">
    <!-- Popular Cars Tab Start -->
    <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
    <!-- Popular Cars Content Wrapper Start -->
    <div class="popular-cars-wrap">
    <!-- Filtering Menu -->
    <div class="popucar-menu text-center">
    <a href="#" data-filter="*" class="active">all</a>
    <a href="#" data-filter=".con">Conver</a>
    <a href="#" data-filter=".hat">Truck</a>
    <a href="#" data-filter=".mpv">MPV</a>
    <a href="#" data-filter=".sedan">Sedan</a>
    <a href="#" data-filter=".suv">SUV</a>
    </div>
    
    <!-- Filtering Menu -->
    
    <!-- PopularCars Tab Content Start -->
    <div class="row popular-car-gird">
    <!-- Single Popular Car Start -->
    <div class="col-lg-4 col-md-6 con suv mpv">
    <div class="single-popular-car">
    <div class="p-car-thumbnails">
    <a class="car-hover" href="assets/img/car/car-1.jpg">
    <img src="assets/img/car/car-1.jpg" alt="JSOFT">
    </a>
    </div>
    
    <div class="p-car-content">
    <h3>
    <a href="#">Dodge Ram 1500</a>
    <span class="price"><i class="fa fa-tag"></i> Kshs. 5,500/day</span>
    </h3>
    
    <h5>HATCHBACK</h5>
    
    <div class="p-car-feature">
    <a href="#">2017</a>
    <a href="#">manual</a>
    <a href="#">AIR CONDITION</a>
    </div>
    </div>
    </div>
    </div>
    <!-- Single Popular Car End -->
    
    <!-- Single Popular Car Start -->
    <div class="col-lg-4 col-md-6 hat sedan">
    <div class="single-popular-car">
    <div class="p-car-thumbnails">
    <a class="car-hover" href="assets/img/car/car-2.jpg">
    <img src="assets/img/car/car-2.jpg" alt="JSOFT">
    </a>
    </div>
    
    <div class="p-car-content">
    <h3>
    <a href="#">Dodge Ram 1500</a>
    <span class="price"><i class="fa fa-tag"></i> Kshs. 5,500/day</span>
    </h3>
    
    <h5>HATCHBACK</h5>
    
    <div class="p-car-feature">
    <a href="#">2017</a>
    <a href="#">manual</a>
    <a href="#">AIR CONDITION</a>
    </div>
    </div>
    </div>
    </div>
    <!-- Single Popular Car End -->
    
    <!-- Single Popular Car Start -->
    <div class="col-lg-4 col-md-6 suv con mpv">
    <div class="single-popular-car">
    <div class="p-car-thumbnails">
    <a class="car-hover" href="assets/img/car/car-3.jpg">
    <img src="assets/img/car/car-3.jpg" alt="JSOFT">
    </a>
    </div>
    
    <div class="p-car-content">
    <h3>
    <a href="#">Dodge Ram 1500</a>
    <span class="price"><i class="fa fa-tag"></i> Kshs. 5,500/day</span>
    </h3>
    
    <h5>HATCHBACK</h5>
    
    <div class="p-car-feature">
    <a href="#">2017</a>
    <a href="#">manual</a>
    <a href="#">AIR CONDITION</a>
    </div>
    </div>
    </div>
    </div>
    <!-- Single Popular Car End -->
    
    <!-- Single Popular Car Start -->
    <div class="col-lg-4 col-md-6 con hat">
    <div class="single-popular-car">
    <div class="p-car-thumbnails">
    <a class="car-hover" href="assets/img/car/car-4.jpg">
    <img src="assets/img/car/car-4.jpg" alt="JSOFT">
    </a>
    </div>
    
    <div class="p-car-content">
    <h3>
    <a href="#">Dodge Ram 1500</a>
    <span class="price"><i class="fa fa-tag"></i> Kshs. 5,500/day</span>
    </h3>
    
    <h5>HATCHBACK</h5>
    
    <div class="p-car-feature">
    <a href="#">2017</a>
    <a href="#">manual</a>
    <a href="#">AIR CONDITION</a>
    </div>
    </div>
    </div>
    </div>
    <!-- Single Popular Car End -->
    
    <!-- Single Popular Car Start -->
    <div class="col-lg-4 col-md-6 con sedan mpv">
    <div class="single-popular-car">
    <div class="p-car-thumbnails">
    <a class="car-hover" href="assets/img/car/car-5.jpg">
    <img src="assets/img/car/car-5.jpg" alt="JSOFT">
    </a>
    </div>
    
    <div class="p-car-content">
    <h3>
    <a href="#">Dodge Ram 1500</a>
    <span class="price"><i class="fa fa-tag"></i> Kshs. 5,500/day</span>
    </h3>
    
    <h5>HATCHBACK</h5>
    
    <div class="p-car-feature">
    <a href="#">2017</a>
    <a href="#">manual</a>
    <a href="#">AIR CONDITION</a>
    </div>
    </div>
    </div>
    </div>
    <!-- Single Popular Car End -->
    
    <!-- Single Popular Car Start -->
    <div class="col-lg-4 col-md-6 hat suv mpv">
    <div class="single-popular-car">
    <div class="p-car-thumbnails">
    <a class="car-hover" href="assets/img/car/car-6.jpg">
    <img src="assets/img/car/car-6.jpg" alt="JSOFT">
    </a>
    </div>
    
    <div class="p-car-content">
    <h3>
    <a href="#">Dodge Ram 1500</a>
    <span class="price"><i class="fa fa-tag"></i> Kshs. 5,500/day</span>
    </h3>
    
    <h5>HATCHBACK</h5>
    
    <div class="p-car-feature">
    <a href="#">2017</a>
    <a href="#">manual</a>
    <a href="#">AIR CONDITION</a>
    </div>
    </div>
    </div>
    </div>
    <!-- Single Popular Car End -->
    </div>
    <!-- PopularCars Tab Content End -->
    </div>
    <!-- Popular Cars Content Wrapper End -->
    </div>
    <!-- Popular Cars Tab End -->
    
    <!-- Newest Cars Tab Start -->
    <div class="tab-pane fade" id="newest_cars" role="tabpanel" aria-labelledby="profile-tab">
    <!-- Newest Cars Content Wrapper Start -->
    <div class="popular-cars-wrap">
    <!-- Filtering Menu -->
    <div class="newcar-menu text-center">
    <a href="#" data-filter="*" class="active">all</a>
    <a href="#" data-filter=".toyota">toyota</a>
    <a href="#" data-filter=".bmw">bmw</a>
    <a href="#" data-filter=".audi">audi</a>
    <a href="#" data-filter=".tata">Tata</a>
    </div>
    
    <!-- Filtering Menu -->
    
    <!-- NewestCars Tab Content Start -->
    <div class="row newest-car-gird">
    <!-- Single Newest Car Start -->
    <div class="col-lg-4 col-md-6 tata audi">
    <div class="single-new-car">
    <div class="p-car-thumbnails">
    <a class="car-hover" href="assets/img/car/car-6.jpg">
    <img src="assets/img/car/car-6.jpg" alt="JSOFT">
    </a>
    </div>
    
    <div class="p-car-content">
    <h3>
    <a href="#">Toyota RAV4 EV</a>
    <span class="price"><i class="fa fa-tag"></i> Kshs. 3,500/day</span>
    </h3>
    
    <h5>Toyota</h5>
    
    <div class="p-car-feature">
    <a href="#">2018</a>
    <a href="#">Auto</a>
    <a href="#">Non AIR CONDITION</a>
    </div>
    </div>
    </div>
    </div>
    <!-- Single Newest Car End -->
    
    <!-- Single Newest Car Start -->
    <div class="col-lg-4 col-md-6 bmw tata toyota">
    <div class="single-new-car">
    <div class="p-car-thumbnails">
    <a class="car-hover" href="assets/img/car/car-5.jpg">
    <img src="assets/img/car/car-5.jpg" alt="JSOFT">
    </a>
    </div>
    
    <div class="p-car-content">
    <h3>
    <a href="#">Toyota RAV4 EV</a>
    <span class="price"><i class="fa fa-tag"></i> Kshs. 3,500/day</span>
    </h3>
    
    <h5>Toyota</h5>
    
    <div class="p-car-feature">
    <a href="#">2018</a>
    <a href="#">Auto</a>
    <a href="#">Non AIR CONDITION</a>
    </div>
    </div>
    </div>
    </div>
    <!-- Single Newest Car End -->
    
    <!-- Single Newest Car Start -->
    <div class="col-lg-4 col-md-6 bmw">
    <div class="single-new-car">
    <div class="p-car-thumbnails">
    <a class="car-hover" href="assets/img/car/car-4.jpg">
    <img src="assets/img/car/car-4.jpg" alt="JSOFT">
    </a>
    </div>
    
    <div class="p-car-content">
    <h3>
    <a href="#">Toyota RAV4 EV</a>
    <span class="price"><i class="fa fa-tag"></i> Kshs. 3,500/day</span>
    </h3>
    
    <h5>Toyota</h5>
    
    <div class="p-car-feature">
    <a href="#">2018</a>
    <a href="#">Auto</a>
    <a href="#">Non AIR CONDITION</a>
    </div>
    </div>
    </div>
    </div>
    <!-- Single Newest Car End -->
    </div>
    <!-- NewestCars Tab Content End -->
    </div>
    <!-- Newest Cars Content Wrapper End -->
    </div>
    <!-- Newest Cars Tab End -->
    
    <!-- Office Map Tab -->
    <div class="tab-pane fade" id="office_map" role="tabpanel" aria-labelledby="contact-tab">
    <div class="map-area">
    <iframe src="https://maps.google.com/maps?width=100%&height=600&hl=en&coord=-1.28333, 36.81667&q=Nairobi%20West%2C%20Nairobi+(Silicon%20Valley%20Season%20One)&ie=UTF8&t=&z=16&iwloc=B&output=embed"></iframe>
    </div>
    </div>
    <!-- Office Map Tab -->
    </div>
    <!-- Choose Area Tab content -->
    </div>
    </div>
    <!-- Choose Area Content End -->
    </div>
    </div>
    </section>
    <!--== Choose Car Area End ==-->
    
    <!--== Pricing Area Start ==-->
    <section id="pricing-area" class="section-padding overlay">
    <div class="container">
    <div class="row">
    <!-- Section Title Start -->
    <div class="col-lg-12">
    <div class="section-title  text-center">
    <h2>Only quality for clients</h2>
    <span class="title-line"><i class="fa fa-car"></i></span>
    <p>Why wouldn't you want to be our client?</p>
    </div>
    </div>
    <!-- Section Title End -->
    </div>
    
    <!-- Pricing Table Conatent Start -->
    <div class="row">
    <!-- Single Pricing Table -->
    <div class="col-lg-4 col-md-6 text-center">
    <div class="single-pricing-table">
    <h3>BUSINESS</h3>
    <h2>Kshs. 5599</h2>
    <h5>PER MONTH</h5>
    
    <ul class="package-list">
    <li>FREE VEHICLE DELIVERY</li>
    <li>WEDDINGS CELEBRATIONS</li>
    <li>FULL INSURANCE INCLUDED</li>
    <li>TRANSPORT ABROAD</li>
    <li>ALL INCLUSIVE MINI BAR</li>
    <li>CHAUFFER INCLUDED IN PRICE</li>
    </ul>
    </div>
    </div>
    <!-- Single Pricing Table -->
    
    <!-- Single Pricing Table -->
    <div class="col-lg-4 col-md-6 text-center">
    <div class="single-pricing-table">
    <h3>Trial</h3>
    <h2>Free</h2>
    <h5>PER MONTH</h5>
    
    <ul class="package-list">
    <li>FREE VEHICLE DELIVERY</li>
    <li>OTHER CELEBRATIONS</li>
    <li>FULL INSURANCE</li>
    <li>TRANSPORT ABROAD</li>
    <li>MINI BAR</li>
    <li>INCLUDED IN PRICE</li>
    </ul>
    </div>
    </div>
    <!-- Single Pricing Table -->
    
    <!-- Single Pricing Table -->
    <div class="col-lg-4 col-md-6 text-center">
    <div class="single-pricing-table">
    <h3>standard</h3>
    <h2>Kshs. 3599</h2>
    <h5>PER MONTH</h5>
    
    <ul class="package-list">
    <li>DELIVERY AT AIRPORT</li>
    <li>WEDDINGS AND OTHER</li>
    <li>FULL INCLUDED</li>
    <li>TRANSPORT ABROAD</li>
    <li>ALL MINI BAR</li>
    <li>CHAUFFER PRICE</li>
    </ul>
    </div>
    </div>
    <!-- Single Pricing Table -->
    </div>
    <!-- Pricing Table Conatent End -->
    </div>
    </section>
    <!--== Pricing Area End ==-->
    
    <!--== Testimonials Area Start ==-->
    <section id="testimonial-area" class="section-padding">
    <div class="container">
    <div class="row">
    <!-- Section Title Start -->
    <div class="col-lg-12">
    <div class="section-title  text-center">
    <h2>Testimonials</h2>
    <span class="title-line"><i class="fa fa-car"></i></span>
    <p>Let's hear from some of our previous customers.</p>
    </div>
    </div>
    <!-- Section Title End -->
    </div>
    
    <div class="row">
    <div class="col-lg-8 col-md-12 m-auto">
    <div class="testimonial-content">
    <!--== Single Testimoial Start ==-->
    <div class="single-testimonial">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis totam obcaecati impedit, at autem repellat vel magni architecto veritatis sed.</p>
    <h3>Vongchong Smith</h3>
    <div class="client-logo">
    <img src="assets/img/client/client-pic-1.jpg" alt="JSOFT">
    </div>
    </div>
    <!--== Single Testimoial End ==-->
    
    <!--== Single Testimoial Start ==-->
    <div class="single-testimonial">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis totam obcaecati impedit, at autem repellat vel magni architecto veritatis sed.</p>
    <h3>Amader Tuni</h3>
    <div class="client-logo">
    <img src="assets/img/client/client-pic-3.jpg" alt="JSOFT">
    </div>
    </div>
    <!--== Single Testimoial End ==-->
    
    <!--== Single Testimoial Start ==-->
    <div class="single-testimonial">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis totam obcaecati impedit, at autem repellat vel magni architecto veritatis sed.</p>
    <h3>Atex Tuntuni Smith</h3>
    <div class="client-logo">
    <img src="assets/img/client/client-pic-2.jpg" alt="JSOFT">
    </div>
    </div>
    <!--== Single Testimoial End ==-->
    </div>
    </div>
    </div>
    </div>
    </section>
    <!--== Testimonials Area End ==-->
    
    <!--== Footer Area Start ==-->
    <section id="footer-area">
    <!-- Footer Widget Start -->
    <div class="footer-widget-area">
    <div class="container">
    <div class="row">
    <!-- Single Footer Widget Start -->
    <div class="col-lg-4 col-md-6">
    <div class="single-footer-widget">
    <h2>About Us</h2>
    <div class="widget-body">
    <img src="assets/img/logo.png" alt="JSOFT">
    
    <div class="newsletter-area">
    <form action="index.html">
    <input type="email" placeholder="Subscribe Our Newsletter">
    <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
    </form>
    </div>
    
    </div>
    </div>
    </div>
    <!-- Single Footer Widget End -->
    
    <!-- Single Footer Widget Start -->
    <div class="col-lg-4 col-md-6">
    <div class="single-footer-widget">
    <h2>get touch</h2>
    <div class="widget-body">
    <ul class="get-touch">
    <li><i class="fa fa-map-marker"></i> Nairobi West, Kenya</li>
    <li><i class="fa fa-mobile"></i> +254 725 127 193</li>
    <li><i class="fa fa-envelope"></i>steekam@gmail.com</li>
    </ul>
    <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a>
    </div>
    </div>
    </div>
    <!-- Single Footer Widget End -->
    </div>
    </div>
    </div>
    <!-- Footer Widget End -->
    
    <!-- Footer Bottom Start -->
    <div class="footer-bottom-area">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 text-center">
    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
    </div>
    </div>
    </div>
    <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->
    
    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
    <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->
    
    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="<?= base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
    <!--=== Jquery Migrate Min Js ===-->
    
    <script src="<?= base_url("assets/js/jquery-migrate.min.js"); ?>"></script>
    <!--=== Popper Min Js ===-->
    
    <script src="<?= base_url("assets/js/popper.min.js"); ?>"></script>
    <!--=== Bootstrap Min Js ===-->
    
    <script src="<?= base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="<?= base_url("assets/js/plugins/gijgo.js"); ?>"></script>
    <!--=== Vegas Min Js ===-->
    <script src="<?= base_url("assets/js/plugins/vegas.min.js"); ?>"></script>
 
    <!--=== Isotope Min Js ===-->
    <script src="<?= base_url("assets/js/plugins/isotope.min.js"); ?>"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="<?= base_url("assets/js/plugins/owl.carousel.min.js"); ?>"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="<?= base_url("assets/js/plugins/waypoints.min.js"); ?>"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="<?= base_url("assets/js/plugins/counterup.min.js"); ?>"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="<?= base_url("assets/js/plugins/mb.YTPlayer.js"); ?>"></script>
    <script src=""></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="<?= base_url("assets/js/plugins/magnific-popup.min.js"); ?>"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="<?= base_url("assets/js/plugins/slicknav.min.js"); ?>"></script>
    
    <!--=== Main Js ===-->
    <script src="<?= base_url("assets/js/main.js"); ?>"></script>
    </body>
    </html>