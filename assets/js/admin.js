/**
 * !Index of the dashboard
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
 * !Employees page function
 */
var employeesPage = function (){
    /**
     * Set nav-link to active  
     */
    var setActiveNav = function(){
        $('.nav-main #employees').addClass('active');
    };

    /**
     *  Datatable for the employees
     * 
     */
    var initEmployeeTable = function(){   
        var fetchUrl = $('.js-dataTable-employee').attr('data-source'); 

        employeeTable = $('.js-dataTable-employee').DataTable({
            columnDefs: [ 
                { 
                    targets: [ 0,3,4 ], 
                    searchable: false, 
                    orderable: false 
                } 
            ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: fetchUrl,
                type: "POST",
                dataType: "json"
            },
            responsive: true
        });

        //Reload the table
        $('#refresh-emp-table, a[href="#btabs-view-employees"]').on('click',function(){
            var elBlock = $(this).closest('.block');

            employeeTable.ajax.reload(function(){
                elBlock.removeClass('block-mode-loading');
            },false);
        });
    };

    /**
     * Fill department select dropdown
     */
    var initFillDepartments = function getDepartments(){
        var dropdown = $('select[name="department"]');
        var source = $(dropdown).data('source');
        $.ajax({
            url: source,
            type: "POST",
            dataType: "json",
            success: (data) => {
                data.forEach(element => {
                    var option = '<option value="'+element["id"]+'">'+element["name"]+'</option>'
                    $(dropdown).append(option); 
                });
                            
            },
            error: (jqXHR, textStatus) => {
                var icon = "fa fa-warning";
                notify(icon,"danger","Could not fetch departments. Check server connection");
                console.log(textStatus);
                
            }
        });
    };

    /**
     * Form add employee
    */
    var initValidationAddEmployee = function(){
        //Validation setup
        var validator = jQuery('.js-add-emp-validation').validate({
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
            },
            submitHandler: () => {
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
                    
                    //Show success notification
                    var icon = "fa fa-check";
                    var message = "Employee details added successfully";
                    notify(icon,"success",message);                
                    
                });
            }
        });

        //Reset form
        $('.js-add-emp-validation button[type="reset"]').on('click',function(event){
            validator.resetForm();
            $('.js-add-emp-validation .row .form-group').removeClass('is-invalid');
        });

    };

    /**
     * Form edit employee
     */
    var initValidationEditEmployee = function(){
        //Setup form with employee details
        $(document).on('click','td button[title="Edit"]',function(){
            $('.nav-item.d-none>a').trigger('click');
            var emp_id = $(this).parent().data('emp-id');

            var source = $('.js-edit-emp-validation').data('source')
            $.ajax({
                url: source,
                type: "POST",
                data: {emp_id: emp_id},
                dataType:"json",
                success: (data) =>{
                    //Set data
                    $('.js-edit-emp-validation input[name="emp_id"]').val(data.id);
                    $('.js-edit-emp-validation input[name="fname"]').val(data.fname);
                    $('.js-edit-emp-validation input[name="lname"]').val(data.lname);
                    $('.js-edit-emp-validation input[name="email"]').val(data.email);
                    $('.js-edit-emp-validation select[name="department"]').val(data.department);
                },
                error: ()=>{
                    console.log("Error");                    
                }
            });                        
        });

        //Validation setup
        var validator = jQuery('.js-edit-emp-validation').validate({
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
                        url: $('#check_edit_email_url').val(),
                        type: "POST",
                        data: { 
                            email : () => { return $('.js-edit-emp-validation input[name="email"]').val();},
                            emp_id: () => { return $('.js-edit-emp-validation input[name="emp_id"]').val();}
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
            },
            submitHandler: () => {
                var form = document.querySelector('.js-edit-emp-validation');
                var action = form.action;
                var formdata = $(form).serialize();
                
                $.ajax({
                    url: action,
                    type: "POST",
                    data: formdata,
                    dataType: "json",
                    success: (data) =>{
                        //Show notification
                        var icon;
                        if(data['type'] == "success"){
                            icon = "fa fa-check";
                        }else if(data['type'] == "danger"){
                            icon = "fa fa-warning";
                        }
                        notify(icon,data['type'],data['message']);
                    },
                    error: ()=>{
                        var icon = "fa fa-warning";
                        notify(icon,"danger","There was an error in update");
                    }
                }).done(function(){
                    $('a[href="#btabs-view-employees"]').trigger('click');              
                });
            }
        });

        //Cancel editing
        $(document).on('click','.js-edit-emp-validation button[type="cancel"]',function(){
            $('.nav-item>a[href="#btabs-view-employees"]').trigger('click');
        });
    };

    /**
     * Deleting of employee
     */
    var initDeleteEmployee = function(){
        $(document).on('click','td button[title="Delete"]',function(){
            let emp_id = $(this).parent().data('emp-id');
            let delete_target = $('.js-dataTable-employee').data('delete-target');

            const deleteSwal = mySwal();
            deleteSwal({   
                title: "Are you sure?",   
                text: "You will not be able to recover this record",   
                type: "warning",       
                // confirmButtonColor: "#DD6B55",  
                confirmButtonText: "Yes, delete employee!",
            })
            .then((result)=>{
                if(result.value){
                    ajaxComm(delete_target,{emp_id: emp_id},"json")
                    .done(data => {
                        var icon,message,type;
                        if(data){
                            icon = "fa fa-check";
                            type="success";
                            message = "Records deleted successfully";
                        }else{
                            icon = "fa fa-warning";
                            type="danger";
                            message = "Error in deletion. Try again later";
                        }
                        notify(icon,type,message);
                        $('#refresh-emp-table').trigger('click');
                    });
                }    
            });  
        });
    };

    /**
     * Fill department select dropdown
     */
    (function getDepartments(){
        var dropdown = $('select[name="department"]');
        var source = $(dropdown).data('source');
        $.ajax({
            url: source,
            type: "POST",
            dataType: "json",
            success: (data) => {
                data.forEach(element => {
                    var option = '<option value="'+element["id"]+'">'+element["name"]+'</option>'
                    $(dropdown).append(option); 
                });
                            
            },
            error: (jqXHR, textStatus) => {
                var icon = "fa fa-warning";
                notify(icon,"danger","Could not fetch departments. Check server connection");
                console.log(textStatus);
                
            }
        });
    })();

    /**
     * Form add employee
    */
    var initValidationAddEmployee = function(){
        //Validation setup
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
            },
            submitHandler: () => {
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
                    
                    //Show success notification
                    var icon = "fa fa-check";
                    var message = "Employee details added successfully";
                    notify(icon,"success",message);                
                    
                });
            }
        });

        //Reset form
        $('.js-add-emp-validation button[type="reset"]').on('click',function(event){
            validator.resetForm();
            $('.js-add-emp-validation .row .form-group').removeClass('is-invalid');
        });

    };

    /**
     * Form edit employee
     */
    var initValidationEditEmployee = function(){
        //Setup form with employee details
        $(document).on('click','td button[title="Edit"]',function(){
            $('.nav-item.d-none>a').trigger('click');
            var emp_id = $(this).parent().data('emp-id');

            var source = $('.js-edit-emp-validation').data('source')
            $.ajax({
                url: source,
                type: "POST",
                data: {emp_id: emp_id},
                dataType:"json",
                success: (data) =>{
                    //Set data
                    $('.js-edit-emp-validation input[name="emp_id"]').val(data.id);
                    $('.js-edit-emp-validation input[name="fname"]').val(data.fname);
                    $('.js-edit-emp-validation input[name="lname"]').val(data.lname);
                    $('.js-edit-emp-validation input[name="email"]').val(data.email);
                    $('.js-edit-emp-validation select[name="department"]').val(data.department);
                },
                error: ()=>{
                    console.log("Error");                    
                }
            });                        
        });

        //Validation setup
        var validator = jQuery('.js-edit-emp-validation').validate({
            debug: true,
            ignore: ['check_edit_email_url'],
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
                        url: $('#check_edit_email_url').val(),
                        type: "POST",
                        data: { 
                            email : () => { return $('.js-edit-emp-validation input[name="email"]').val();},
                            emp_id: () => { return $('.js-edit-emp-validation input[name="emp_id"]').val();}
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
            },
            submitHandler: () => {
                var form = document.querySelector('.js-edit-emp-validation');
                var action = form.action;
                var formdata = $(form).serialize();
                
                $.ajax({
                    url: action,
                    type: "POST",
                    data: formdata,
                    dataType: "json",
                    success: (data) =>{
                        //Show notification
                        var icon;
                        if(data['type'] == "success"){
                            icon = "fa fa-check";
                        }else if(data['type'] == "danger"){
                            icon = "fa fa-warning";
                        }
                        notify(icon,data['type'],data['message']);
                    },
                    error: ()=>{
                        var icon = "fa fa-warning";
                        notify(icon,"danger","There was an error in update");
                    }
                }).done(function(){
                    $('a[href="#btabs-view-employees"]').trigger('click');              
                });
            }
        });

        //Cancel editing
        $(document).on('click','.js-edit-emp-validation button[type="cancel"]',function(){
            $('.nav-item>a[href="#btabs-view-employees"]').trigger('click');
        });
    };

    /**
     * Deleting of employee
     */
    var initDeleteEmployee = function(){
        $(document).on('click','td button[title="Delete"]',function(){
            var emp_id = $(this).parent().data('emp-id');
            var delete_target = $('.js-dataTable-employee').data('delete-target');
            
            $.ajax({
                url: delete_target,
                type: "POST",
                data: {emp_id: emp_id},
                dataType: "json",
                success:(data) =>{
                    var icon,message,type;
                    if(data){
                        icon = "fa fa-check";
                        type="success";
                        message = "Records deleted successfully";
                    }else{
                        icon = "fa fa-warning";
                        type="danger";
                        message = "Error in deletion. Try again later";
                    }
                    notify(icon,type,message);
                    $('#refresh-emp-table').trigger('click');

                },
                error: () => {
                    var icon = "fa fa-warning";
                    var message = "Error occurred. Please check server connection";
                    notify(icon,"danger",message);
                }

            });
            
        });
    };

    return {
        init: function() {
            setActiveNav();
            initEmployeeTable();
            initFillDepartments();
            
            initValidationAddEmployee();
            initValidationEditEmployee();
            initDeleteEmployee();
        }
    };

}();

/**
 * !Departments page function
 */
var departmentsPage = function(){
    //Set nav-link to active
    var setActiveNav = function(){
        $('.nav-main #departments').addClass('active');
    };

    var initDepartmentsView = () => {
        let dataTarget = $('.dept-list').data('fetch-url');

        ajaxComm(dataTarget,false,"html")
        .done( data => {
            $('.dept-list').html(data);
        });
        
    }

    var initAddDepartment = () => {
        //Form attributes setting
        $('.add-dept').on('click',event => {
            $('#modalDept form').addClass('add-action').removeClass('edit-action');
            $('#modalDept .block-title').html('Add new department');
            $('#modalDept .modal-footer button[type="submit"]').text('Add department');
            
            //Add remote rule to dept_name
            $('#modalDept form [name="dept_name"]').rules('add',{
                remote: {
                    url: $('#modalDept form [name="check_dept_name"]').val(),
                    type: "POST",
                    data: { 
                        dept_name : () => { return $('#modalDept form [name="dept_name"]').val();}
                    },
                    dataType: 'json'
                }
            });
        });            
    }

    var initEditDepartment = () => {
        //Form attributes setting
        $('.dept-list').on('click','.edit-dept',event => {
            let _this = event.target;
            let dept_id = $(_this).closest('li.list-group-item').data('dept-id') ;
            let dept_name = $(_this).closest('li.list-group-item').data('dept-name') ;
            
            $('#modalDept form').addClass('edit-action').removeClass('add-action');
            $('#modalDept form input[name="dept_name"]').val(dept_name);
            $('#modalDept form input[name="dept_id"]').val(dept_id);
            $('#modalDept .block-title').html('Edit department');
            $('#modalDept .modal-footer button[type="submit"]').text('Save changes');
            $('#modalDept').modal('show');

            $('#modalDept form [name="dept_name"]').rules('remove','remote');
            $('#modalDept form [name="dept_name"]').rules('add',{
                required: true,
                remote: {
                    url: $('#modalDept form [name="check_dept_name_edit"]').val(),
                    type: "POST",
                    data: { 
                        dept_name : () => { return $('#modalDept form [name="dept_name"]').val();},
                        dept_id : () => { return $('#modalDept form [name="dept_id"]').val();}
                    },
                    dataType: 'json'
                }
            });
        });
    }

    //Validation setup
    var initValidator =  () => {
        return $('#modalDept form').validate({
                    rules: {
                        'dept_name': {
                            required: true,
                        }
                    },   
                    messages: {
                        'dept_name':{
                            required: 'Department name is required',
                            remote: 'The set department name is already registered'
                        }
                    },
                    submitHandler: () => {
                        let actionType = $('#modalDept form').attr('class');
                        let dataTarget = "";
                        if(actionType == "add-action"){
                            dataTarget = $('#modalDept form').data('add-action');
                        }else if(actionType == "edit-action"){
                            dataTarget = $('#modalDept form').data('edit-action');
                        }
                        let dataSend = $('#modalDept form').serialize();
                        
                        ajaxComm(dataTarget,dataSend,"json")
                        .done(data => {
                            notify(data.icon,data.type,data.message);
                        })        
                        .always( () =>{
                            $('#modalDept form [name="dept_name"]').val(' ');
                            $('#modalDept').modal('hide');
                            initDepartmentsView();
                        });
                        
                    }
                });
    }

    //Reset modal form
    $('#modalDept').on('hide.bs.modal',function(event){
        $('#modalDept form input[name="dept_name"]').val(' ');
        $('#modalDept form input[name="dept_id"]').val(' ');
        $('#modalDept form .form-group').removeClass('is-invalid');
    });

    /**
     * Delete department
     */
    var initDeleteDepartment = function(){
        $('.dept-list').on('click','.btn-group button[title="Delete"]',event => {
            let _this = event.target;
            let delete_target = $(_this).closest('li.list-group-item').data('delete-target');

            const deleteSwal = mySwal();
            deleteSwal({   
                title: "Are you sure?",   
                text: "You will not be able to recover this record",   
                type: "warning",       
                confirmButtonText: "Yes, delete department!",
            })
            .then((result)=>{
                if(result.value){
                    ajaxComm(delete_target,false,"json")
                    .done(data => {
                        var icon,message,type;
                        if(data){
                            icon = "fa fa-check";
                            type="success";
                            message = "Record deleted successfully";
                        }else{
                            icon = "fa fa-warning";
                            type="danger";
                            message = "Error in deletion. Try again later";
                        }
                        notify(icon,type,message);
                        initDepartmentsView();
                    });
                }    
            });  
        });
    };

    return{
        init: function(){
            setActiveNav();
            initDepartmentsView();
            initValidator(); 
            initAddDepartment();
            initEditDepartment();
            initDeleteDepartment();
        }
    }
}();

/**
 * !Customers page function
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

/*
 * *********************************************************************************
 *                                                                                 *
 * Utility functions                                                               *
 *                                                                                 * 
 * *********************************************************************************
 */

/**
 * 
 * @param {String} icon An icon class to be used for the notification.
 * @param {Strin} type success || danger || warning || info(default)
 * @param {String} message Message to be displayed in the notification body
 * @param {Sting} url If you want the notification to be a link (Optional)
 * @param {String} align Position to be aligned on page right(default) || left
 */
var notify = function(icon,type,message,url,align){
    // Create notification
    $.notify({
        icon: icon || '',
        message: message,
        url: url || ''
    },
    {
        element: 'body',
        type: type || 'info',
        allow_dismiss: true,
        newest_on_top: true,
        showProgressbar: false,
        placement: {
            from: 'top',
            align: align || 'right'
        },
        mouse_over: 'pause',
        offset: 20,
        spacing: 10,
        z_index: 1033,
        delay: 5000,
        timer: 1000,
        template: '<div data-notify="container" class="col-11 col-sm-3 alert alert-{0}" role="alert">' +
                    '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                    '<span data-notify="icon"></span> ' +
                    '<span data-notify="title">{1}</span> ' +
                    '<span data-notify="message">{2}</span>' +
                    '<div class="progress" data-notify="progressbar">' +
                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    '</div>' +
                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                    '</div>',
        animate: {
            enter: 'animated fadeIn',
            exit: 'animated fadeOutDown'
        }
    });
};

/**
 * Ajax comunication helper for data sending and receiving with the server
 *  
 * @param {String} dataTarget URL tp where to send the request
 * @param {Object} dataSend   An object with data to send with request
 * @param {String} dataType     json || text || html || xml This is whatever the server will respond with
 * @param {String} errorMessage  Message to be displayed when ajax call fails
 * 
 * @return {Object} an ajax object of the ajax call
 */
var ajaxComm = function(dataTarget,dataSend,dataType){
    return $.ajax({
                url: dataTarget,
                type: "POST",
                data: dataSend,
                dataType: dataType
            })
            .catch(error => {
                var icon = "zmdi zmdi-alert-circle-o";
                notify(icon,"danger","Error in server connection");
                console.log(error);
            });
}

/**
 * Sets sweet alert defaults
 * @returns {Object} A swal object
 */
var mySwal =  () => {
    // Set default properties
    return swal.mixin({
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonClass: 'btn btn-lg btn-alt-success m-5',
                cancelButtonClass: 'btn btn-lg btn-alt-danger m-5',
                inputClass: 'form-control'
            });
};

/**
 * Set form validatorjquery defaults
 */
var initDefaultValidator = () => {
    $.validator.setDefaults({
        debug: true,
        ignore: ':hidden',
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
        }
    });
}


/*
 * *********************************************************************************
 *                                                                                 *
 * Loads when the page loads                                                       *
 *                                                                                 * 
 * *********************************************************************************
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

    //Removes autocomplet on all input fields
    $('input').attr('autocomplete',"off");

    /**
     * Load Codebase helpers
     */
    Codebase.helpers(['datepicker','notify','table-tools']);

    //Default validator options
    initDefaultValidator();


    /**
     * Loads the function related to the specific page
     */
    var page = window.location.pathname;
    if(page.includes('admin/employees')){
        employeesPage.init();        
        
    } else if(page.includes('admin/customers')){
        customersPage.init();

    } else if(page.includes('admin/departments')){
        departmentsPage.init();

    }else {
        indexDashboard.init();
    }

});
