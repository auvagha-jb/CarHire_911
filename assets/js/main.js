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

    //Datatable for the employees
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

    return {
        init: function() {
            setActiveNav();
            initEmployeeTable();            
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