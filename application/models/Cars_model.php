<?php

class Cars_model extends CI_Model{
    
    function getCars(){
        //The form data
        $car_chosen = $this->input->post('car-chosen');
        
        $param = array($car_chosen,$car_chosen); //Entered twice since there are two parameters in the query
        
        $sql = "SELECT * FROM cars WHERE category = ? AND status = 'available' OR brand = ? AND status = 'available'";
        $query = $this->db->query($sql,$param);
        
        $_SESSION['category'] = $car_chosen;
        return $query;
    }

}