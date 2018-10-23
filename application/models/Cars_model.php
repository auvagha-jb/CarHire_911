<?php

class Cars_model extends CI_Model{
    
    function specificSearch(){
        //The form data
        $car_chosen = $this->input->post('car-chosen');
        
        $param = array($car_chosen,$car_chosen); //Entered twice since there are two parameters in the query
        
        $sql = "SELECT * FROM cars WHERE category = ? AND status = 'available' OR brand = ? AND status = 'available'";
        $query = $this->db->query($sql,$param);
        
        $_SESSION['category'] = $car_chosen;
        return $query;
    }
    
    function generalSearch(){
        unset($_SESSION['category']);
        $sql = "SELECT * FROM cars WHERE status = 'available' ORDER BY category";
        $query = $this->db->query($sql);
    
        return $query;
    }
    
    function getCarDetails(){
        $car_id = $this->input->get('car_id');
        
         $sql = "SELECT * FROM cars WHERE car_id = ?";
        $query = $this->db->query($sql,$car_id);
        $row = $query->row();
        ////
        return $row;
    }
    
    

}