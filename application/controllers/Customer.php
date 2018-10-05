<?php

class Customer extends CI_Controller{
    
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
    
    public function register(){
        $this->load->view('templates/header');
        $this->load->view('register');
        $this->load->view('templates/footer');
    }
    
    public function add_customer(){
        //Form data
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $pw_hash = password_hash($password, PASSWORD_BCRYPT);
        $user_type = "customer";
        
        date_default_timezone_set('Africa/Nairobi');
        $date_reg = date('Y-m-d H:i:s');
        
        $data = array(
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email,
            'password' => $pw_hash,
            'user_type' => $user_type,
            'date_reg' => $date_reg,
        );
        
        $this->load->model('users');
        $this->users->add_customer($data);
    }
    
    public function login(){
        $this->load->view('templates/header');
        $this->load->view('login');
        $this->load->view('templates/footer');
    }
    
    public function test(){
        echo "Ajax ok";
    }
    
}