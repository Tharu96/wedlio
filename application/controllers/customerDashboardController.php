<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class customerDashboardController extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('getCustomerDataModel');
	}

	public function customerAccountSetting($id){
		$data['customerData'] = $this->getCustomerDataModel->getAccountData($id);
		$data['userData'] = $this->getCustomerDataModel->getUserData($id);
		$this->load->view("customer/customerDashboardHeader",$data);
        $this->load->view('customer/customerAccountSetting',$data);
	}
}
 
?>

