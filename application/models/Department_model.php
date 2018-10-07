<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
    class Department_model extends CI_Model{
        /**
         * Gets the details of departments
         */
        public function get_departments(){
            $this->db->order_by('name','ASC');
            $result = $this->db->get('department');
            return $result->result_array();
        }

        /**
         * Validator call to the db for dept name
         */
        public function check_dept_name($name){
            $this->db->where('name',$name);
            $result = $this->db->get('department');
            return ($result->num_rows() === 0);
        }

        /**
         * Validator call to the db for dept name when editing
         * Ensures edited name does not exist already
         */
        public function check_dept_name_edit($name,$id){
            $this->db->where('name',$name);
            $this->db->where('id !=',$id);
            $result = $this->db->get('department');
            return ($result->num_rows() === 0);
        }

        /**
         * Add department details
         */
        public function add_department(){
            $data = array(
                'name' => $this->input->post('dept_name')
            );
            return $this->db->insert('department',$data);
        }

        /**
         * Edits department name
         */
        public function edit_department(){
            $data = array(
                'name' => $this->input->post('dept_name')
            );
            $this->db->where('id',$this->input->post('dept_id'));
            return $this->db->update('department',$data);
        }

        /**
         * Deletes department
         */
        public function delete_department($dept_id){
            $this->db->where( 'id',$dept_id);
            return $this->db->delete('department');
        }
    }