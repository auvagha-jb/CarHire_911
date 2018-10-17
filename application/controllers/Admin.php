<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
    class Admin extends CI_Controller{
        /*
        ****************************************************
        ** Processes in the index page
        ****************************************************
        */

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
            echo json_encode( $this->employee_model->check_email($this->input->post('email')) );
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

            return $this->employee_model->add_employee($enc_password);
        }

        /**
         * Gets the employee details
         */
        public function get_employees(){
            $draw = intval($this->input->post("draw"));

            $fetch_data = $this->employee_model->get_employees();
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
            $data = $this->employee_model->get_single_employee($this->input->post('emp_id'));
            echo json_encode($data);
        }

        /**
         * Checks email edited is not an already registered email by another user
         */
        public function check_edit_email(){
            echo json_encode( $this->employee_model->check_edit_email($this->input->post('email'), $this->input->post('emp_id')) );
        }

        /**
         * Edit employee details
         */
        public function edit_employee(){
            $success = $this->employee_model->edit_employee();
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
            echo json_encode($this->employee_model->delete_employee($this->input->post('emp_id')));
        }

        /**
         * Fetch departments
         */
        public function fetch_departments(){
            echo json_encode($this->employee_model->fetch_departments());
        }

        /* 
        *******************************************************************
        **  Department calls  handler
        ********************************************************************/
        /**
         * Handler for view departments call
         */
        public function view_departments(){
            $depts = $this->department_model->get_departments();
            $response = "";
            foreach ($depts as $dept) {
                $response .= '<li class="list-group-item" data-dept-id="'.$dept["id"].'" data-dept-name="'.$dept["name"].'" data-delete-target="'.base_url("admin/delete_department/".$dept["id"]).'">
                                <span class="dept-name">'.$dept["name"].'</span>
                                <div class="btn-group float-right">
                                    <button type="button" class="btn btn-sm btn-alt-info edit-dept" data-toggle="tooltip" title="Edit">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-alt-danger" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </li>';                
            }

            echo $response;
        }

        /**
         * Validates the department name
         */
        public function check_dept_name(){
            echo json_encode( $this->department_model->check_dept_name($this->input->post('dept_name')) );
        }

        /**
         * Validates the department name when editing
         */
        public function check_dept_name_edit(){
            echo json_encode( $this->department_model->check_dept_name_edit($this->input->post('dept_name'), $this->input->post('dept_id')) );
        }

        /**
         * Handler for add department call
         */
        public function add_department(){
            if($this->department_model->add_department()){
                $success = array(
                    "icon" => "zmdi zmdi-badge-check",
                    "type" => "success",
                    "message" => "New department added successfully"
                );
                echo json_encode($success);
            }else{
                $error = array(
                    "icon" => "zmdi zmdi-alert-circle-o",
                    "type" => "danger",
                    "message" => "Error in adding records. Try again later"
                );
                echo json_encode($error);
            }
        }

        /**
         * Handler for edit department call
         */
        public function edit_department(){
            if($this->department_model->edit_department()){
                $success = array(
                    "icon" => "zmdi zmdi-badge-check",
                    "type" => "success",
                    "message" => "Department name changed added successfully"
                );
                echo json_encode($success);
            }else{
                $error = array(
                    "icon" => "zmdi zmdi-alert-circle-o",
                    "type" => "danger",
                    "message" => "Error in editing records. Try again later"
                );
                echo json_encode($error);
            }
        }

        /**
         * Handler for delete department
         */
        public function delete_department($dept_id){
            echo json_encode($this->department_model->delete_department($dept_id));
        }

        /*
        ****************************************************
        ** Customer call handler
        ****************************************************
        */
        /**
         * Get customers call handler
         */
        public function get_customers(){
            $draw = intval($this->input->post("draw"));

            $fetch_data = $this->customer_model->get_customers();
            $data = [];

            foreach($fetch_data['result'] as $row){
                //Actions column
                $actions = '<div class="btn-group" data-emp-id="'.$row->id.'">
                    <button type="button" class="btn btn-sm btn-alt-danger" data-toggle="tooltip" title="Suspend account">
                        <i class="fa fa-lock"></i>
                    </button>
                </div>';
                $data[] = array(
                    $row->id,
                    $row->name,
                    $row->email,
                    $row->date_reg,
                    "<button class='btn btn-sm btn-alt-success'>Active</button>",
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
         * Suspend customer call handler
         */
        public function suspend_customer(){

        }
    }