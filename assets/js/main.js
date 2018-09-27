/**
 * Index of the dashboard
 */
var indexDashboard = function(){
    //Set nav-link to active
    var setActiveNav = function(){
        $('.nav-main #dashboard').addClass('active');
    };

    return{
        init: function(){
            setActiveNav();
        }
    }
}();

/**
 * Employees page function
 */
var employeesPage = function (){
    //Set nav-link to active
    var setActiveNav = function(){
        $('.nav-main #employees').addClass('active');
    };

    /**
     *  Datatable for the employees
     * 
     */
    var initEmployeeTable = function(){
        $('.js-dataTable-employee').dataTable({
            columnDefs: [ 
                { 
                    targets: [ 0,3,4 ], 
                    searchable: false, 
                    orderable: false 
                } 
            ],
        });
    };

    /**
     * Form submition and validation of add employee
     */

    //Validation plugin setup
    var initValidationAddEmployee = function(){
        var validator = jQuery('.js-add-emp-validation').validate({
            debug: true,
            ignore: ['check_email_url'],
            errorClass: 'invalid-feedback animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.form-group').append(error);
            },
            highlight: function(e) {
                jQuery(e).closest('.form-group').removeClass('is-invalid').addClass('is-invalid');
            },
            success: function(e) {
                jQuery(e).closest('.form-group').removeClass('is-invalid');
                jQuery(e).remove();
            },
            rules: {
                'fname': {
                    required: true,
                },
                'lname': {
                    required: true,
                },
                'email': {
                    required: true,
                    email: true,
                    remote: {
                        url: $('#check_email_url').val(),
                        type: "POST",
                        data: { 
                            email : () => { return $('input[name="email"]').val();}
                        },
                        dataType: 'json'                        
                    }
                },
                'department': {
                    required: true,
                }
            },
            messages: {
                'fname': "First name is required",
                'lname': "Last name is required",
                'email':{
                    required: 'Please enter a valid email address',
                    remote: 'Email is already registered'
                },
                'department':"Must set a department"
            }
        });

        $('.js-add-emp-validation button[type="reset"]').on('click',function(event){
            validator.resetForm();
            $('.js-add-emp-validation .row .form-group').removeClass('is-invalid');
        });

        //Submits the form
        $('.js-add-emp-validation button[type="submit').on('click',function(event){
            event.preventDefault();
            
            var form = document.querySelector('.js-add-emp-validation');
            var action = form.action;
            var formdata = $(form).serialize();
            
            $.ajax({
                url: action,
                type: "POST",
                data: formdata,
                success: (data) =>{
                    console.log(data);
                },
                error: ()=>{
                    console.log("Error");                    
                }
            }).done(function(){
                $('.js-add-emp-validation button[type="reset"]').trigger('click');
            });          
            
        });

    };

    return {
        init: function() {
            setActiveNav();
            initEmployeeTable();
            
            //Employee form Validation
            initValidationAddEmployee();
        }
    };

}();

/**
 * Customers page function
 */
var customersPage =  function(){
    //Set nav-link to active
    var setActiveNav = function(){
        $('.nav-main #customers').addClass('active');
    };

    return{
        init: function(){
            setActiveNav();
        }
    }
}();

/**
 * Loads when the page loads
 */
$(document).ready(()=>{
    /**
     * Helper for the sidebar toggle
     */
    $(window).on('resize load',function(event){
        var viewPortSize = $(this).width();
        var burger = $('#page-header button[data-toggle="layout"]');

        if(viewPortSize < 992){
            burger.attr('data-action','sidebar_toggle');
            
        }else{
            burger.attr('data-action','sidebar_mini_toggle');
        }

        
    });

    $('input').attr('autocomplete',"off");

    /**
     * Load Codebase helpers
     */
    Codebase.helpers(['datepicker']);


    /**
     * Loads the function related to the specific page
     */
    var page = window.location.pathname;
    if(page.includes('admin/employees')){
        employeesPage.init();        
        
    } else if(page.includes('admin/customers')){
        customersPage.init();

    }else {
        indexDashboard.init();

    }
    
});