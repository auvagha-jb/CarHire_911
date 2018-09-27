<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
    class Admin_model extends CI_Model {
        /**
         * Concstructor loading the database
         */
        public function __construct(){
            $this->load->database();
        }

        /**
         * Checks if email is already registered
         */
        public function check_email($email){
            $this->db->where('email',$email);
            $result = $this->db->get('users');
            return $result->num_rows() === 0;
        }

        /**
         * Add employee details
         */
        public function add_employee($enc_password){
            $data_user = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'password' => $enc_password
            );
            
            $insert_details = $this->db->insert('users',$data_user);
            $insert_dept = false;

            if($insert_details){
                $user = $this->get_user_details($data_user['email']);
                $data_employee = array(
                    'employee_id' => $user['user_id'],
                    'department_id' => $this->input->post('department')
                );

                $insert_dept = $this->db->insert('employee',$data_employee);
            }           

            return $insert_details && $insert_dept ;
        }

        /**
         * Get user details
         */
        public function get_user_details($email){
            $this->db->where('email',$email);
            $result = $this->db->get('users');
            return $result->row_array();
        }

    }
