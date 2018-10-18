<?php

class Employee extends CI_Controller{
    
    public function index(){
        $this->load->view("templates/header");
        $this->load->view("add-cars");
        $this->load->view("templates/footer");
    }
    
    function add_car(){
        
    }
    
    
}