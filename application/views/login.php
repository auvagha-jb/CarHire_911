    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Login</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Welcome to enjoy our services.</p>
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
                <div class="col-lg-4 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form" id="login-form">
                            
                            <!--== Login form -->
                            <h3>Welcome Back!</h3> 
                            <!--==Feedback message-->
                             <div id="feedback"></div>
                            <form method="post">
                                <div class="username">
                                    <input type="text" placeholder="Email Address" name="email" id="email" required="">
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Password" name="password" id="password" required="">
                                </div>
                                <div class="log-btn">
                                    <button type="submit" id="login_btn"><i class="fas fa-sign-in-alt"></i> Log In</button>
                                </div>
                            </form>
                        </div>
                        <div class="create-ac"> 
                            <p>New here? <a href="<?= base_url("customer/register");?>">Sign Up</a></p>
                        </div>
                    </div>
                </div>
        	</div>
        </div>
    </section>
    
    <script>
        $(document).ready(function(){
            
            $("#login-form").submit(function(event){
                event.preventDefault();
                
                var email = $("#email").val();
                var password = $("#password").val();
                verify_user(email,password);
            });
            
            function verify_user(email,password){
                
                $.post("../customer/verify_user",{email:email, password:password}, function(data){
                    console.log(data);
                    if(data.error){
                        $("#feedback").addClass("alert alert-danger");
                        $("#feedback").html(data.error);
                    }else{
                        window.location.href("../customer");
                    }
                    
                },"json");
            }

        }); 
    </script>