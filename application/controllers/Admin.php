<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
    class Admin extends CI_Controller{
        /**
         * The index view
         */
        public function index(){
            $this->load->view('templates/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/index');
            $this->load->view('templates/footer');
        }

        /**
         * Loads the employees page
         */
        public function employees_index(){
            $this->load->view('templates/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/employees');
            $this->load->view('templates/footer');
        }

        /**
         * Customers page
         */
        public function customers_index(){
            $this->load->view('templates/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/customers');
            $this->load->view('templates/footer');
        }

        /**
         * Checks for unique employee email
         */
        public function check_email(){
            echo json_encode( $this->admin_model->check_email($this->input->post('email')) );
        }

        /**
         * Adds employee
         */
        public function add_employee(){
            //Encrypt password
            $gen_password = random_string('alnum', 12);
            $enc_password = password_hash($gen_password,PASSWORD_BCRYPT);

            echo $gen_password;
            echo $this->input->post('department');

            return $this->admin_model->add_employee($enc_password);
        }

    }