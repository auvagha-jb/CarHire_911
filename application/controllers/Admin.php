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
            is_logged_in();

            $data = array(
                'customers' => array(
                    'count' => $this->customer_model->stats()
                ),
                'employees' => array(
                    'count' => $this->employee_model->stats()
                )
            );

            $this->load->view('templates/admin/header');
            $this->load->view('templates/admin/admin_page_header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/index',$data);
            $this->load->view('templates/admin/footer');
        }

        /**
         * Loads the employees page
         */
        public function employees_index(){
            is_logged_in();

            $this->load->view('templates/admin/header');
            $this->load->view('templates/admin/admin_page_header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/employees');
            $this->load->view('templates/admin/footer');
        }

        /**
         * Customers page
         */
        public function customers_index(){
            is_logged_in();

            $this->load->view('templates/admin/header');
            $this->load->view('templates/admin/admin_page_header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/customers');
            $this->load->view('templates/admin/footer');
        }

        /**
         * Loads the departments page
         */
        public function departments_index(){
            is_logged_in();

            $this->load->view('templates/admin/header');
            $this->load->view('templates/admin/admin_page_header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/departments');
            $this->load->view('templates/admin/footer');
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
            is_logged_in();

            $response = array();

            //Encrypt password
            $gen_password = random_string('alnum', 12);
            $enc_password = password_hash($gen_password,PASSWORD_BCRYPT);

            $response['password'] = $gen_password;
            $inserted =  $this->employee_model->add_employee($enc_password);

            if($inserted){
                $data = array(
                    'name' => $this->input->post('fname').' '.$this->input->post('lname'),
                    'username' => $this->input->post('username'),
                    'password' => $gen_password,
                );
                $body = '
                <p>Dear '.$data['name'].',</p>
                <p>You have been registered to the Car Door Company as an employee</p>
                <p>These are your credentials: <br>
                <strong>Username: </strong> '.$this->input->post('email').'<br>
                <strong>Passwordd: </strong>'.$data['password'].'</p>
                <p>You will be prompted to change your password on first login.</p>
                <a href="'.base_url().'">Click here to login</a> 
                
                ';
                $settings = array(
                    'to' => $this->input->post('email'),
                    'subject' => 'EMPLOYEE REGISTRATION',
                    'body' => $body
                );
    
                // Send email to user
                $sent = send_email($settings);

                if($sent){
                    $response['res'] = array(
                        'icon' => "fa fa-check",
                        "type" => "success",
                        "message" => "Record inserted successfully. Registration email sent. "
                    );
                }else {
                    $this->employee_model->delete_latest_emp();
                    $response['res'] = array(
                        'icon' => "fa fa-warning",
                        "type" => "warning",
                        "message" => "Could not finish registration. Unable to sent registration email. Check your internet connection and try again"
                    );
                }

                
            }else{
                $response['res'] = array(
                    'icon' => "fa fa-warning",
                    "type" => "warning",
                    "message" => "Could not finish registration. Check your server connection"
                );
            }
            echo json_encode($response);
        }

        /**
         * Gets the employee details
         */
        public function get_employees(){
            is_logged_in();

            $draw = intval($this->input->post("draw"));

            $fetch_data = $this->employee_model->get_employees();
            $data = [];

            foreach($fetch_data['result'] as $row){
                $actions; $status;
                switch ($row->status){
                    case 0:
                    {
                        $status = "<button disabled class='btn btn-sm btn-alt-warning'>Suspended</button>";
                        $actions = '<div class="btn-group" data-emp-id="'.$row->id.'">
                            <button type="button" class="btn btn-sm btn-alt-info" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-alt-warning" data-toggle="tooltip" title="Unsuspend account">
                                <i class="fa fa-unlock"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-alt-danger" data-toggle="tooltip" title="Terminate employement">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>';
                        break;
                    }
                    case 1:
                    {
                        $status = "<button disabled class='btn btn-sm btn-alt-success'>Active</button>";
                        $actions = '<div class="btn-group" data-emp-id="'.$row->id.'">
                            <button type="button" class="btn btn-sm btn-alt-info" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-alt-warning" data-toggle="tooltip" title="Suspend account">
                                <i class="fa fa-lock"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-alt-danger" data-toggle="tooltip" title="Terminate employement">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>';
                        break;
                    }
                    case 2:
                    {
                        $status = "<button disabled class='btn btn-sm btn-alt-danger'>Terminated</button>";
                        $actions = '<div class="btn-group" data-emp-id="'.$row->id.'">
                            <button disabled type="button" class="btn btn-sm btn-alt-info" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button disabled type="button" class="btn btn-sm btn-alt-warning" data-toggle="tooltip" title="Suspend account">
                                <i class="fa fa-lock"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-alt-danger" data-toggle="tooltip" title="Reinstate account">
                                <i class="fa fa-refresh"></i>
                            </button>
                        </div>';
                        break;
                    }
                    default: break;
                }
                $data[] = array(
                    $row->id,
                    $row->name,
                    $row->email,
                    $row->department,
                    $status,
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
            is_logged_in();

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
            is_logged_in();

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
         * Suspend employee
         */
        public function suspend_employee(){
            is_logged_in();

            echo json_encode($this->employee_model->suspend_employee($this->input->post('emp_id')));
        }

        /**
         * Unsuspend employee
         */
        public function unsuspend_employee(){
            is_logged_in();

            echo json_encode($this->employee_model->unsuspend_employee($this->input->post('emp_id')));
        }

        /**
         * Fetch departments
         */
        public function fetch_departments(){
            is_logged_in();

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
            is_logged_in();

            $depts = $this->department_model->get_departments();
            $response = "";
            foreach ($depts as $dept) {
                if($dept["id"] != 0){
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
            }

            echo $response;
        }

        /**
         * Validates the department name
         */
        public function check_dept_name(){
            is_logged_in();

            echo json_encode( $this->department_model->check_dept_name($this->input->post('dept_name')) );
        }

        /**
         * Validates the department name when editing
         */
        public function check_dept_name_edit(){
            is_logged_in();

            echo json_encode( $this->department_model->check_dept_name_edit($this->input->post('dept_name'), $this->input->post('dept_id')) );
        }

        /**
         * Handler for add department call
         */
        public function add_department(){
            is_logged_in();

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
            is_logged_in();

            if($this->department_model->edit_department()){
                $success = array(
                    "icon" => "zmdi zmdi-badge-check",
                    "type" => "success",
                    "message" => "Department name changed successfully"
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
            is_logged_in();

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
            is_logged_in();

            $draw = intval($this->input->post("draw"));

            $fetch_data = $this->customer_model->get_customers();
            $data = [];

            foreach($fetch_data['result'] as $row){
                $actions; $status;
                switch ($row->status){
                    case 0:
                    {
                        $status = "<button disabled class='btn btn-sm btn-alt-warning'>Suspended</button>";
                        $actions = '<div class="btn-group" data-user-id="'.$row->id.'">
                            <button type="button" class="btn btn-sm btn-alt-warning" data-toggle="tooltip" title="Unsuspend account">
                                <i class="fa fa-unlock"></i>
                            </button>
        
                        </div>';
                        break;
                    }
                    case 1:
                    {
                        $status = "<button disabled class='btn btn-sm btn-alt-success'>Active</button>";
                        $actions = '<div class="btn-group" data-user-id="'.$row->id.'">
                            <button type="button" class="btn btn-sm btn-alt-warning" data-toggle="tooltip" title="Suspend account">
                                <i class="fa fa-lock"></i>
                            </button>
                        </div>';
                        break;
                    }
                    default: break;
                }

                $data[] = array(
                    $row->id,
                    $row->name,
                    $row->email,
                    $row->date_reg,
                    $status,
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
         * Suspend/unsuspend customer call handler
         */
        public function suspend_customer(){
            is_logged_in();

            echo json_encode($this->customer_model->suspend_customer($this->input->post('user_id'),$this->input->post('action')));
        }
    }