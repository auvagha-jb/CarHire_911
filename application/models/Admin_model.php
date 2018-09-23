<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
    class Admin_model extends CI_Model {
        /**
         * Concstructor loading the database
         */
        public function __construct(){
            $this->load->database();
        }
    }