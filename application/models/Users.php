<?php 

class Users extends CI_Model{
    
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
        $data = ""; //The output that will be returned
        
        //Check whether the email address exists
        $this->db->where("email",$email);
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
    
    function logout(){
        session_destroy();
        
        //Redirect to home
        $home = base_url("customer/");
        header("location: ".$home);
    }
    
}
