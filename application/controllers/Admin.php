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

    }