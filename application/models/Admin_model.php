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
         * Checks if email is already registered
         */
        public function check_edit_email($email,$emp_id){
            $this->db->where('email',$email);
            $this->db->where('user_id !=',$emp_id);
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
         * Query for the employee details view
         */
        public function employee_query(){
            $this->db->select("user_id AS id, concat_ws(' ',fname,lname) AS name, email, department.name AS department");
            $this->db->from('users');
            $this->db->join('employee','users.user_id = employee.employee_id','inner');
            $this->db->join('department','employee.department_id = department.id','inner');
        }

        /**
         * Get all employee details
         */
        public function get_employees(){
            $order_column = array(null,"name","email",null,null);
            
            $this->employee_query();

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
                'recordsTotal' => $this->all_records(),
                'recordsFiltered' => $query->num_rows(),
                'result' => $query->result()
            );
        }

        /**
         * Counts all the records in employees view
         */
        public function all_records(){
            $this->employee_query();
            
            $query = $this->db->get();
            return $query->num_rows();
        }


        /**
         * Gets the details of a single employee
         */
        public function get_single_employee($emp_id){
            $this->db->select("user_id AS id, fname, lname, email, department.id AS department");
            $this->db->from('users');
            $this->db->join('employee','users.user_id = employee.employee_id','inner');
            $this->db->join('department','employee.department_id = department.id','inner');
            $query = $this->db->where('users.user_id',$emp_id);
            return $this->db->get()->row_array();
        }

        /**
         * Update edited employee details
         */
        public function edit_employee(){
            $data_emp = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
            );

            $this->db->where('user_id',$this->input->post('emp_id'));
            $details = $this->db->update('users',$data_emp);

            $data_dept = array(
                'department_id' => $this->input->post('department')
            );
            $this->db->where('employee_id',$this->input->post('emp_id'));
            $dept = $this->db->update('employee',$data_dept);

            return $details && $dept;
        }

        /**
         * Deletes the records of a employee
         */
        public function delete_employee($emp_id){
            $this->db->where('user_id',$emp_id);
            return $this->db->delete('users');
        }

        /**
         * Fetch departments
         */
        public function fetch_departments(){
            $result = $this->db->get('department');
            return $result->result_array();
        }
        

    }
