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
    
   
}
