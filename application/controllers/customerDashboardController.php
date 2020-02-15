<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class customerDashboardController extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('getCustomerDataModel');
	}

	public function customerAccountSetting(){
		$this->load->view("customer/customerDashboardHeader");
        $this->load->view('customer/customerAccountSetting');
	}
}
 
?>