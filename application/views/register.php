<!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Sign Up</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Join the community. Create a free account</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                    <div class="login-page-content">
                            <div class="login-form">
                                <h3>Sign Up</h3>  
                                <form action="<?= base_url("customer/add_customer");?>" method="post" id="register_form">
                                        <div class="name form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required="">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="username form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" required="">
                                            <div class="invalid-feedback">Email address already exists</div>
                                        </div>
                                        <div class="password form-group">
                                            <input type="password" class="form-control" name="password" id="password"  placeholder="Password" required="">
                                        </div>
                                        <div class="password form-group">
                                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required="">
                                            <div class="invalid-feedback">Ensure the passwords match</div>
                                        </div>
                                        <div class="log-btn">
                                            <button type="submit"><i class="fa fa-sign-in-alt"></i> Sign Up</button>
                                        </div>
                                    </form>
                            </div>

                            <div class="create-ac"> 
                                    <p>Have an account? <a href="<?= base_url("customer/login");?>">Sign In</a></p>
                            </div>
                    </div>
                </div>
        	</div>
        </div>
    </section>
    <!--== Login Page Content End ==-->
