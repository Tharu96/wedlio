<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class customerDashboardController extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('getCustomerDataModel');
	}

<<<<<<< HEAD
    	public function updateCustomer(){
		$this->load->view("customer/customerDashboardHeader");
		
        $this->load->view('customer/updateCustomer');
	}
=======
>>>>>>> 0438689a3f0eb88e7634ae0e4a4028e409974674

	public function customerAccountSetting(){
		$this->load->view("customer/customerDashboardHeader");
        $this->load->view('customer/customerAccountSetting');
	}
}
 
?>