<?php
defined('BASEPATH') OR exit("No direct access allowed");

class SignUp extends CI_Controller{
    
    public function sign_up(){
        $this->load->view('sign_up');
    }
    
    public function add_customer(){
        $this->load->model('customer');
        $this->customer->add_customer();
    }
    
    public function test(){
        echo "Ajax ok";
    }
    
    
}