<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class updateCustomerController extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('getCustomerDataModel');
	}

    	public function updateCustomer(){
		$this->load->view("customer/customerDashboardHeader");
		$data['customerData'] = $this->getCustomerDataModel->getCustomerData($email);
        $this->load->view('customer/updateCustomer',$data);
	}

}
 
?>