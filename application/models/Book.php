<?php

class Book extends CI_Model { 
    function add_booking(){ 
        //this array is used to get fetch data from the view page. 
        $data = array(
            "user_id" => $_SESSION['user_id'],
            "car_id" => $this->input->post('car_id'),
            "pickup_location_id" => $this->input->post('pickup_location_id'),
            "return_location_id" => $this->input->post('return_location_id'),
            "pickup_date" => $this->input->post('pickup_date'),
            "return_date" => $this->input->post('return_date'),
            "extra_feat_fee" => $this->input->post('extra_feat_fee'),
            "amount_due" => $this->input->post('amount_due')
        );
        
        $update_data = array(
            'status' => 'booked' 
        );
        
        //insert data into database table.
        $this->db->insert('reservations', $data);
        
        //Update cars table
        $this->db->where('car_id', $data['car_id']);
        $this->db->update('cars', $update_data);
        
        redirect('customer/booking_success');
    }
    
    public function getPrice(){
        $location_id = $this->input->post('location');
        
        $sql = "SELECT location_fee FROM locations WHERE location_id = ?";
        $query = $this->db->query($sql,$location_id);
        
        $row = $query->row();
        echo $row->location_fee;
    }
    
    public function getBasePrice(){
        $car_id = $this->input->post('id');
        
        $sql = "SELECT base_price FROM cars WHERE car_id = ?";
        $query = $this->db->query($sql,$car_id);
        $row = $query->row();
        
        echo $row->base_price;
    }
 
} 