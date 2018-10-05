<?php 

class Users extends CI_Model{
    
    function add_customer($data){        
        $this->db->insert('users', $data);
        
        $home = base_url("customer/");
        header("location: ".$home);
    }
    
    function check_email($email){
        
    }
    
}
