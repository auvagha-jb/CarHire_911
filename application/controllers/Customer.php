<?php

class Customer extends CI_Controller{
    
    public function index(){
        $this->load->view('templates/customer/header');
        $this->load->view('home');
        $this->load->view('templates/customer/footer');
    }
    
    public function register(){
        $this->load->view('templates/customer/header');
        $this->load->view('register');
        $this->load->view('templates/customer/footer');
    }
    
    public function add_customer(){
        $this->load->model('users');
        $this->users->add_customer();
    }
    
    public function login(){
        $this->load->view('templates/customer/header');
        $this->load->view('login');
        $this->load->view('templates/customer/footer');
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
        $data['query'] = $this->cars_model->specificSearch();
        
        $this->load->view('templates/customer/header');
        $this->load->view('search_results',$data);
        $this->load->view('templates/customer/footer');
    }
    
    function view(){
        $this->load->model('cars_model');
        $data['query'] = $this->cars_model->generalSearch();
        
        $this->load->view('templates/customer/header');
        $this->load->view('search_results',$data);
        $this->load->view('templates/customer/footer');
    }
    
    function book(){
        $this->load->model('cars_model');
        $data['row'] = $this->cars_model->getCarDetails();

        $this->load->view('templates/customer/header');
        $this->load->view('book_car',$data);
        $this->load->view('templates/customer/footer'); 
    }
    
    function add_booking() {
        $this->load->model('book');
        $this->book->add_booking();
    } 
    
    function contact_us(){
        $this->load->view('templates/customer/header');
        $this->load->view('contact_us');
        $this->load->view('templates/customer/footer');
    }
    
    function send_email(){
        $this->load->model('users');
        $this->users->send_email();
    }
    
    function mail_success(){
        $this->load->view('templates/customer/header');
        $this->load->view('messages/mail_success');
        $this->load->view('templates/customer/footer');
    }
    
    function mail_failure(){
        $this->load->view('templates/customer/header');
        $this->load->view('messages/mail_failure');
        $this->load->view('templates/customer/footer');
    }
    
    function booking_success(){
        $this->load->view('templates/customer/header');
        $this->load->view('messages/booking_success');
        $this->load->view('templates/customer/footer');
    }
    
    function getPrice(){
        $this->load->model('book');
        $this->book->getPrice();
    }
    
    function getBasePrice(){
        $this->load->model('book');
        $this->book->getBasePrice();
    }
    
}