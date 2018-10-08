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
    <script>
        $(document).ready(function(){
            //To ensure the email address is not replicated
            $("#email").change(function(){
                var email = $("#email").val();
                check_email(email);
            }).keyup(function(){
                var email = $("#email").val();
                check_email(email);
            });
            
            //To ensure the passwords match
            $("#confirm_password").keyup(function(){
                var pwd = $("#password").val();
                var confirm_pwd = $(this).val();
                confirmPassword(pwd,confirm_pwd);
            });
            
            //To ensure the form is fit to be submitted
            $("#register_form").submit(function(event){
                if(!isValid()){
                    event.preventDefault();
                }
            });
            
            function check_email(email){
     
                $.post("../customer/check_email", {email: email}, function(data,status){
                    if(data === "email-exists"){               
                        showInvalid("#email");
                    }else{
                        removeInvalid("#email");
                    } 
                });
            }
            
            function confirmPassword(pwd,confirm_pwd){
                if(pwd !== confirm_pwd){
                    showInvalid("#password");
                    showInvalid("#confirm_password");
                }else{
                    removeInvalid("#password");
                    removeInvalid("#confirm_password");
                }
            }
           
           
            function showInvalid(selector){
                $(selector).addClass("is-invalid");
            }
            
            function removeInvalid(selector){
                $(selector).removeClass("is-invalid");
            }
            
            function isValid(){
                var email = document.getElementById("email");
                var password = document.getElementById("password");
                var className = "is-invalid";
                
                //If the file is free of errors
                if(!hasClass(email,className) && !hasClass(password,className) ){
                   return true;
                }
                
                return false;
            }
            
            function hasClass(element,cls){
                return (' '+element.className+' ').indexOf(' '+cls+' ') > -1;
            }
                
        });
    </script>