<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <link rel='shortcut icon' type="image/png" href="img/hostel-logo.png">
	
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.2/angular-animate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.2/angular-route.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
        
        <link rel="stylesheet" href="../../assets/css/forms.css">
        <script src="../../assets/js/forms.js"></script>
    </head>
<body>

    <!--Navigation bar-->
    <?php echo 'Needs nav';?>
    
    <div class="container-fluid">
    <!--Form-->
    <div class="row">
        
        <div class="col-md-6 col-sm-12">
            <img class="img-responsive sign-up-img" src="<?= base_url('assets/img/car/car-1.jpg');?>" alt="sign_up img">
            
        </div>
        
        <div class="col-md-6 col-sm-12">
            <div class="form-data">
                       
                <form action="SignUp" method="post" class="sign-up">
                     <h4 class="lead">Sign up</h4>
                    
                    <div class="row">
                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for='fname'>First name</label>
                            <input type="text" name="fname" id="fname" class="form-control" required>
                        </div>
                    </div> 

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" name="lname" id="lname" class="form-control" required>
                        </div>
                     </div>
                     </div>
                     
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                        <div class="invalid-feedback">Email address already exists</div>
                    </div>
                                          
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pwd" id="pwd" class="form-control" required>
                        <div class="invalid-feedback" id="password-feedback"></div>
                    </div>
                     
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_pwd" id="confirm_pwd" class="form-control" required>
                        <div class="invalid-feedback">The passwords did not match</div>
                    </div>
                     
                     <div class="form-group">
                         <label for="gender">Gender</label>
                         <select name="gender" id="gender" class="form-control" required>
                             <option value="">Choose One</option>
                             <option value="Male">Male</option>
                             <option value="Female">Female</option>
                         </select>
                     </div>
                     
                     <button type="submit" name="s-u-submit" id="s-u-submit" class="btn btn-primary px-4">Join</button>
                </form>
            </div>
            
        </div>
        
    </div>
    
    </div>
    
</body>
</html>
