<?php 

class Users extends CI_Model{
    
    function add_customer(){   
        //Form data
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $pw_hash = password_hash($password, PASSWORD_BCRYPT);
        $user_type = "customer";
        
        date_default_timezone_set('Africa/Nairobi');
        $date_reg = date('Y-m-d H:i:s');
        
        $data = array(
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email,
            'password' => $pw_hash,
            'user_type' => $user_type,
            'date_reg' => $date_reg,
        );
        
        
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
                //set session variables
                $_SESSION['email'] = $email;
                $_SESSION['fname'] = $row->fname; 
                
            }else{
                $res["error"] = "Incorrect password";
            }
        }else{
            $res['error'] = "Invalid username";
        }
        echo json_encode($res);
    }
    
    function logout(){
        session_destroy();
        
        //Redirect to home
        $home = base_url("customer/");
        header("location: ".$home);
    }
    
}
