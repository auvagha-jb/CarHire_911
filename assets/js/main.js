$(document).ready(()=>{
    /**
     * Loads the function related to the specific page
     */
    var page = window.location.pathname;
    if(page.includes('admin/employees')){
        employeesPage();
    } else if(page.includes('admin/customers')){
        customersPage();
    }else {
        indexDashboard();
    }
    
});

/**
 * Index of the dashboard
 */
var indexDashboard = function(){
    //Set nav-link to active
    $('.nav-main #dashboard').addClass('active');
};

/**
 * Employees page function
 */
var employeesPage = function (){
    //Set nav-link to active
    $('.nav-main #employees').addClass('active');

};

/**
 * Customers page function
 */
var customersPage =  function(){
    //Set nav-link to active
    $('.nav-main #customers').addClass('active');
};