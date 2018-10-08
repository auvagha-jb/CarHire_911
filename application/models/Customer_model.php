<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php 
    class Customer_model extends CI_Model{
        /**
         * Query for the customer details view
         */
        public function customer_query(){
            $this->db->select("user_id AS id, concat_ws(' ',fname,lname) AS name, email, date_reg");
            $this->db->from('users');
            $this->db->where('user_type','customer');
        }

        /**
         * Gets the details of all customers
         */
        public function get_customers(){
            $order_column = array(null,"name","email",null,null);
            
            $this->customer_query();
            
            //Search
            if(isset($_POST['search']['value'])){
                $this->db->like('fname',$_POST['search']['value']);
                $this->db->like('lname',$_POST['search']['value']);
                $this->db->or_like('email',$_POST['search']['value']);
            }

            //Order by
            if(isset($_POST['order'])){
                $this->db->order_by($order_column[$_POST['order'][0]['column']],$_POST['order'][0]['dir']);
            }else{
                $this->db->order_by("id","DESC");
            }

            //Limit
            if($_POST['length'] != -1){
                $this->db->limit($_POST['length'],$_POST['start']);
            }
            
            $this->db->where('user_type','customer');
            $query = $this->db->get();

            return array(
                'recordsTotal' => $this->all_customer_records(),
                'recordsFiltered' => $query->num_rows(),
                'result' => $query->result()
            );
        }

        /**
         * Counts all the records of customers
         */
        public function all_customer_records(){
            $this->customer_query();
            
            $query = $this->db->get();
            return $query->num_rows();
        }

        /**
         * Suspend customer account customer
         */
        public function suspend_customer(){

        }
    }