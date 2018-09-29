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
         * Loads the departments page
         */
        public function departments_index(){
            $this->load->view('templates/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/departments');
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

        /**
         * Gets the employee details
         */
        public function get_employees(){
            $draw = intval($this->input->post("draw"));

            $fetch_data = $this->admin_model->get_employees();
            $data = [];

            foreach($fetch_data['result'] as $row){
                //Actions column
                $actions = '<div class="btn-group" data-emp-id="'.$row->id.'">
                    <button type="button" class="btn btn-sm btn-alt-info" data-toggle="tooltip" title="Edit">
                        <i class="fa fa-pencil"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-alt-danger" data-toggle="tooltip" title="Delete">
                        <i class="fa fa-times"></i>
                    </button>
                </div>';
                $data[] = array(
                    $row->id,
                    $row->name,
                    $row->email,
                    $row->department,
                    $actions
                );
            }

            $result = array(
                'draw' => $draw,
                'recordsTotal' => $fetch_data['recordsTotal'],
                'recordsFiltered' => $fetch_data['recordsFiltered'],
                'data' => $data
            );

            echo json_encode($result);            
        }

        /**
         * Get details of a single employee
         */
        public function get_single_employee(){
            $data = $this->admin_model->get_single_employee($this->input->post('emp_id'));
            echo json_encode($data);
        }

        /**
         * Checks email edited is not an already registered email by another user
         */
        public function check_edit_email(){
            echo json_encode( $this->admin_model->check_edit_email($this->input->post('email'), $this->input->post('emp_id')) );
        }

        /**
         * Edit employee details
         */
        public function edit_employee(){
            $success = $this->admin_model->edit_employee();
            $response = array();

            if($success){
                $response["type"] = "success";
                $response["message"] = "Details updated successfully";
            }else{
                $response["type"] = "danger";
                $response["message"] = "Details could not be updated. Please try again later";
            }
            
            echo json_encode($response);
        }

        /**
         * Delete employee
         */
        public function delete_employee(){
            echo json_encode($this->admin_model->delete_employee($this->input->post('emp_id')));
        }

        /**
         * Fetch departments
         */
        public function fetch_departments(){
            echo json_encode($this->admin_model->fetch_departments());
        }

    }