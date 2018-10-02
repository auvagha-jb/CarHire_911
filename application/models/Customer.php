<?php 

class Customer extends CI_Model{
    
    function add_customer(){
        
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $pw_hash = password_hash($password, PASSWORD_BCRYPT);
        $user_type = $this->input->post('user_type');
        
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
    }
}