<?php 

class Users extends CI_Model{
    
    function __construct(){
        parent::__construct();
    }
    
    function add_customer(){   
        //Form data
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $pw_hash = password_hash($password, PASSWORD_BCRYPT);
        
        $data = array(
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email,
            'password' => $pw_hash,
            'user_type' => 1,
        );
        $this->setSession($data);
        $this->db->insert('users', $data);
        
        $home = base_url("customer/");
        header("location: ".$home);
    }
    
    
    function check_email(){
        $email = $this->input->post('email');
        
        $this->db->where("email",$email);
        $query = $this->db->get("users");
        $data="";
        
        if($query->num_rows()>0){
            $data = 'email-exists';
        }  else {
            $data = 'Made it';   
        }
        
        echo $data;
    }
    
    function verify_user(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $res = array(); //The output that will be returned
        
        //Check whether the email address exists
        $this->db->where("email",$email);
        $this->db->where("user_type",1);
        $query = $this->db->get("users");
        
        //If it does..
        if($query->num_rows()>0){
            $row = $query->row();
            $hash = $row->password;
            //Verify password
            if(password_verify($password, $hash)){
                $data = "";
                
                //set session variables
                $_SESSION['user_id'] = $row->user_id;
                $_SESSION['email'] = $email;
                $_SESSION['fname'] = $row->fname; 
                
            }else{
                $data = "Incorrect password";
            }
            
        }else{
            $data = "Invalid username";
        }
        echo $data;
    }
    
    function setSession($data){
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['fname'] = $data['fname']; 
    }
    
    function logout(){
        session_destroy();
        
        //Redirect to home
        $home = base_url("customer/");
        header("location: ".$home);
    }
    
    function send_email(){
        //Form data
        $name = $this->input->post('name');
        $from = $this->input->post('from');
        $to = "jerry.auvagha@gmail.com";
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
        
        $this->load->library("phpmailer_library");
        $mail = $this->phpmailer_library->load();
        
        $mail ->IsSmtp(); 
        $mail ->SMTPDebug = 0; //To enable or disable debug
        $mail ->SMTPAuth = true; //Gmail requires authentication
        $mail ->SMTPSecure = 'ssl'; 
        $mail ->Host = "smtp.gmail.com"; //SMTP host
        $mail ->Port = 465; // Port No. or 587 id the former doesn't work
        $mail ->IsHTML(true); //If HTML format set true 
        $mail ->Username = $from;
        $mail ->Password = "Benja@2017!99#";
        $mail ->SetFrom($from,$name);
        $mail ->Subject = $subject;
        $mail ->Body = $message;
        $mail ->AddAddress($to);

        if(!$mail->Send()){
            redirect("customer/mail_failure");
        }
        else{
            $_SESSION['sender_name'] = $name;
            redirect("customer/mail_success");
        }
    }
    


    /**
     * Call to login for company employees
     */
    public function login(){
        //Validate
        $this->db->where('email', $this->input->post('login-email'));
        $this->db->where('user_type!=',1);

        $result = $this->db->get('users');

        if ($result->num_rows() == 1) {
            if($result->row(0)->user_type == 2){
                $this->db->select('users.*, employee.logged_once');
                $this->db->from('users');
                $this->db->join('employee','users.user_id = employee.employee_id','inner');
                $this->db->where('users.user_id',$result->row(0)->user_id);
                $result1 = $this->db->get();
                return password_verify($this->input->post('login-password'),$result1->row(0)->password) ? $result1->row(0) : false;
            }
            return password_verify($this->input->post('login-password'),$result->row(0)->password) ? $result->row(0) : false;
        }
    }

    /**
     * Validate email on login
     */
    public function check_login_email(){
        $this->db->where('email',$this->input->post('email'));
        $result = $this->db->get('users');
        return ($result->num_rows() !== 0);
    }
    
    /**
     * Validate password on login
     */
    public function check_login_password(){
        $this->db->where('email',$this->input->post('email'));
        $result = $this->db->get('users');
        if($result->num_rows() == 1){
            return password_verify($this->input->post('password'),$result->row(0)->password);
        }
    }

    /**
     * Update password
     */
    public function update_password($user_id,$first){
        $data = array(
            'password' => password_hash($this->input->post('update-password'),PASSWORD_BCRYPT)
        );
        $this->db->where('user_id', $user_id);
        $one = $this->db->update('users',$data);
        $two;
        if($first){
            $this->db->where('employee_id', $user_id);
            $two = $this->db->update('employee',array('logged_once'=> 1 ));
        }else{
            $this->revoke_reset_code($user_id,$_SESSION['reset_code']);
            unset($_SESSION['reset_code']);
        }
        return $one || $two;
    }

    /**
     * Gets details for a user
     */
    public function get_user($email){
        $this->db->where('email',$email);
        $query = $this->db->get('users');            
        return $query->row_array();
    }

     /**
      * Updates the reset code on password change request
      */
    public function set_reset_code($reset_code,$user_id){
        //Revoke any expired codes
        $this->revoke_expired_codes();

        $data = array(
            'user_id' => $user_id,
            'reset_code' => $reset_code
        );

        return $this->db->insert('password_reset',$data);
    }

     /**
         * Checks if the reset code is still valid
         */
        public function validate_reset_code($user_id,$reset_code){
            //Revoke any expired codes
            $this->revoke_expired_codes();

            $where = array(
                'user_id' => $user_id,
                'reset_code' => $reset_code,
                'valid' => 1
            );
            $this->db->where($where);
            $query = $this->db->get('password_reset');

            return ($query->num_rows() === 1);
        }

        //Revoke any links expired for password reset
        public function revoke_expired_codes(){
            $this->db->where('valid',1);
            $query = $this->db->get('password_reset');
            if($query->num_rows() > 0){
                
                foreach ($query->result() as $row) {
                    $sent_at = date_create($row->sent_at);
                    $now = date_create();
                    $diff = date_diff($now,$sent_at);

                    if($diff->d >= 2){
                        $this->db->update('password_reset',array('valid'=>0),array('reset_code'=> $row->reset_code));
                    }
                    
                }
            }
        }

        /**
         * Revoke used reset codes
         */
        public function revoke_reset_code($user_id,$reset_code){
            $where = array(
                'user_id' => $user_id,
                'reset_code' => $reset_code                
            );
            $data = array('valid'=>0);
            $this->db->where($where);
            return $this->db->update('password_reset',$data);
        }
}
