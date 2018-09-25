<?php
defined('BASEPATH') OR exit("No direct access allowed");

class SignUpController extends CI_Controller{
    public function index(){
        $this->load->view("sign_up");
    }
}