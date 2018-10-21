<?php

class Book extends CI_Model{
    
    public function getPrice(){
        $location_id = $this->input->post('location');
        
        $sql = "SELECT location_fee FROM locations WHERE location_id = ?";
        $query = $this->db->query($sql,$location_id);
        
        $row = $query->row();
        echo $row->location_fee;
    }
    
}
