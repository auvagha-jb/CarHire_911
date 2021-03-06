    <!--== Slider Area Start ==-->
    <section id="slider-area">
    <!--== slide Item One ==-->
    <div class="single-slide-item overlay">
    <div class="container">
    <div class="row">
    <div class="col-lg-5">
    <div class="book-a-car"> 
        <form action="<?= base_url("Customer/search");?>" method="post">
        <h4 style="text-align: center; font-weight: bold;">FIND A CAR</h4>
        <h4>SEARCH BY</h4>
        <div class="row pl-2">
            <span class="col-md-6">
                <label>Category
                <input type="radio" name="search-option" id="category-option" value='category' style="transform:scale(0.5);">
                </label>
            </span>
            <span class="col-md-6">
                <label>Brand
                <input type="radio" name="search-option" id="brand-option" value='brand' style="transform:scale(0.5);">
                </label>
            </span>
        </div>

        <!--== Car Choose ==-->
        <div class="choose-car-type book-item">
            <h4 id="search-by"></h4>
            <select class="custom-select" name="car-chosen" required="" id="car-chosen">
                
            </select>
        </div>
        
        <div class="book-button text-center">
            <button class="book-now-btn" type="submit">Search</button>
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
    <p>Welcome to our comprehensive car hire search. Established in 1999, we have earned the trust of tens of thousands of customers by providing the highest pedigree of car hire services.</p>
    <p>We'll help you make your trip as cheap as possible, so you're sure to hit the road smiling. Come drive with us.</p>
    <div class="about-btn">
    <a href="#slider-area">Book a Car</a>
    <a href="<?= base_url('customer/contact_us');?>">Contact Us</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- About Content End -->
    
    
    <!-- About Video End -->
    </div>
    </div>
    </section>
    <!--HR-->
    <hr class="my-4">
    
    <!--== About Us Area End ==-->
    
   <!--=== Partner Area removed ==-->
    
    <!--== Services area removed==-->
    
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
    <i class="far fa-smile-beam"></i>
    </div>
    <div class="funfact-content">
    <p><span class="counter">10000</span>+</p>
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
    <i class="fa fa-hotel"></i>
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
    
    <!--Choose Car Area removed-->
    
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
    <p>There was excellent customer service and the car perfomance was top notch.</p>
    <h3>Fidhrosa Khalifa</h3>
    <div class="client-logo"> 
    <img src="<?= base_url("assets/img/client/client-pic-1.jpg"); ?>" alt="JSOFT">
    </div>
    </div>
    <!--== Single Testimoial End ==-->
    
    <!--== Single Testimoial Start ==-->
    <div class="single-testimonial">
    <p>It's amazing how clean the car was. Even cleaner than my car back in Norway!</p>
    <h3>Amader Tuni</h3>
    <div class="client-logo">   
    <img src="<?= base_url("assets/img/client/client-pic-3.jpg"); ?>" alt="JSOFT">
    </div>
    </div>
    <!--== Single Testimoial End ==-->
    
    <!--== Single Testimoial Start ==-->
    <div class="single-testimonial">
    <p>The entire process was simple and straight forward. No hidden costs, no strings attached.</p>
    <h3>Alex Tuntuni Smith</h3>
    <div class="client-logo"> 
    <img src="<?= base_url("assets/img/client/client-pic-2.jpg"); ?>" alt="JSOFT">
    </div>
    </div>
    <!--== Single Testimoial End ==-->
    </div>
    </div>
    </div>
    </div>
    </section>
    <!--== Testimonials Area End ==-->
    <script src="<?= base_url("assets/js/customer.js");?>"></script>
    
    