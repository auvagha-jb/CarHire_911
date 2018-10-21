<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller{

    public function index(){
        $this->load->view('templates/admin/header');
        $this->load->view('company/login');
        $this->load->view('templates/admin/footer');
    }

    /**
     * Logs out user
     */
    public function logout(){

    }

    /**
     * Forgot password call
     */
    public function forgot_password(){
        $this->load->view('templates/admin/header');
        $this->load->view('company/forgot_password');
        $this->load->view('templates/admin/footer');
    }

    /**
     * Update password call
     */
    public function update_password(){
        $this->load->view('templates/admin/header');
        $this->load->view('company/update_password');
        $this->load->view('templates/admin/footer');
    }

    /**
     * Helps with the redirect based on the user role
     */
    public function user_redirect($type){
        switch($type){
            case 2:
                redirect('employee');
                break;
            case 3:
                redirect('admin');
                break;
            default:
                redirect(base_url('company'));
                break;
        }
    }
}
