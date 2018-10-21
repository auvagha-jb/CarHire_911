/**
 * Login 
 */
var initLogin = function (){
    var validator = jQuery('.js-validation-login').validate({
        rules:{
            'login-email':{
                required: true,
                email: true,
                remote: {
                    url: $('#check_email_url').val(),
                    type: "POST",
                    data: { 
                        email : () => { return $('input[name="login-email"]').val();}
                    },
                    dataType: 'json'                        
                }
            },
            'login-password':{
                remote: {
                    url: $('#check_password_url').val(),
                    type: "POST",
                    data: { 
                        email : () => { return $('input[name="login-email"]').val();},
                        password : () => { return $('input[name="login-password"]').val();}
                    },
                    dataType: 'json'
                }
            }
        },
        messages:{
            'login-email': {
                required : "Email is required",
                remote: "Email is not registered"
            },
            'login-password': {
                remote: "Invalid password"
            }
        },
        submitHandler: form => {
            form.submit(); 
        }

    });
};

/**
 * Update password
 */
var initUpdatePassword = function () {
    let validator = $('.js-validation-update').validate({
        rules: {
            'update-password': {
                required:true,
                minlength:6
            },
            'update-confirm': {
                required:true,
                equalTo: '#update-password'
            }
        },
        messages: {
            'update-password': {
                minlength: "Password must contain at least 6 characters"
            },
            'update-confirm': {
                equalTo: "Passwords must match"
            }
        },
        submitHandler: form => {
            form.submit();
        }
    });
};

/**
 * Forgot password
 */
var initForgotPassword = function () {
    let validator = $('.js-validation-forgot').validate({
        rules: {
            'reminder-email':{
                required: true,
                email: true,
                remote: {
                    url: $('#check_email_url').val(),
                    type: "POST",
                    data: { 
                        email : () => { return $('input[name="reminder-email"]').val();}
                    },
                    dataType: 'json'                        
                }
            }
        },
        messages:{
            'reminder-email':{
                required : "Email is required",
                remote: "Email is not registered"
            }

        },
        submitHandler: form => {
            form.submit();
        }
    });
};


$(document).ready( () => {
    let page = window.location.pathname;
    if(page.includes('company/update_password')) {
        initUpdatePassword();
    }else if(page.includes('company/forgot_password')){
        initForgotPassword();
    }else if(page.includes('company') || page.includes('company/login') ){
        initLogin();        
    }
});