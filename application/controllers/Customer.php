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
        $this->load->model('users');
        $this->users->add_customer();
    }
    
    public function login(){
        $this->load->view('templates/header');
        $this->load->view('login');
        $this->load->view('templates/footer');
    }
    
    public function test(){
        echo "Ajax ok";
    }
    
    function check_email(){
        $this->load->model("users");
        $this->users->check_email();
    }
    
    function verify_user(){
        $this->load->model("users");
        $this->users->verify_user();
    }
    
    function logout(){
        $this->load->model("users");
        $this->users->logout();
    }
    
    
    function search(){
        $this->load->model('cars_model');
        $data['query'] = $this->cars_model->getCars();
        
        $this->load->view('templates/header');
        $this->load->view('search_results',$data);
        $this->load->view('templates/footer');
    }
    
    function book(){
        $this->load->view('templates/header');
        $this->load->view('book_car');
        $this->load->view('templates/footer');
        
    }
    
}