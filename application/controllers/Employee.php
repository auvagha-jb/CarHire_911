<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {


	public function index()
	{


		 $this->load->model('Crud_model');
 		 $this->Crud_model->viewdata();
	   $data['query'] = $this->Crud_model->viewdata();
		 $this->load->view('Implement/employee', $data);
     $this->load->view("templates/employee/footer"); 


	}

	public function test(){
		$this->load->view("test");
	}

	public function add_car(){
		$this->load->model('Crud_model');
		$this->Crud_model->add_car();
	}

}
