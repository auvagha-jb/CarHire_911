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
                'user_type' => 'employee',
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

        /**
         * Get employee details
         */
        public function get_employees(){
            $order_column = array(null,"name","email",null,null);

            $this->db->select("user_id AS id, concat_ws(' ',fname,lname) AS name, email, department.name AS department");
            $this->db->from('users');
            $this->db->join('employee','users.user_id = employee.employee_id','inner');
            $this->db->join('department','employee.department_id = department.id','inner');

            //Search
            if(isset($_POST['search']['value'])){
                $this->db->like('name',$_POST['search']['value']);
                $this->db->or_like('email',$_POST['search']['value']);

            }

            //Order by
            if(isset($_POST['order'])){
                $this->db->order_by($order_column[$_POST['order'][0]['column']],$_POST['order'][0]['dir']);
            }else{
                $this->db->order_by("id","DESC");
            }

            //Limit
            if($_POST['length'] != -1){
                $this->db->limit($_POST['length'],$_POST['start']);
            }

            $query = $this->db->get();

            return array(
                'recordsTotal' => $query->num_rows(),
                'recordsFiltered' => $query->num_rows(),
                'result' => $query->result()
            );
        }

    }
