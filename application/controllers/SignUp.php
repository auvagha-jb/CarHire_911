<?php
defined('BASEPATH') OR exit("No direct access allowed");

class SignUp extends CI_Controller{
    
    public function index(){
        $this->load->view('sign_up');
        $this->load->model('customer');
    }
    
    public function add_customer(){
        $this->customer>add_customer();
    } 
}