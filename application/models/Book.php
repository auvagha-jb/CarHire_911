<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19/10/2018
 * Time: 18:14
 */

class Book extends CI_Model {

    function add_booking()
    {
        //this array is used to get fetch data from the view page.
        $data = array(
            "pickup_location_id" => $this->input->post('pickup_location_id'),
            "return_location_id" => $this->input->post('return_location_id'),
            "pickup_date" => $this->input->post('pickup_date'),
            "return_date" => $this->input->post('return_date'),
            "extra_feat_fee" => $this->input->post('extra_feat_fee'),
            "amount_due" => $this->input->post('amount_due')
        );
        //insert data into database table.
        $this->db->insert('reservations', $data);
    }


    function logout(){
        session_destroy();

        //Redirect to home
        $home = base_url("customer/");
        header("location: ".$home);
    }
}