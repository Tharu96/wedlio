<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class updateCustomerController extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('getCustomerDataModel');
	}

    	public function updateCustomer($id){
		$data['weddingData'] = $this->getCustomerDataModel->getWeddingData($id);
		$data['customerData'] = $this->getCustomerDataModel->getAccountData($id);
		
		$this->load->view("customer/customerDashboardHeader",$data);
		
        $this->load->view('customer/updateCustomer',$data);
	}

	public function update($id){
		$weddingdetails['engagementDate'] = $this->input->post('engagementDate');
		$weddingdetails['weddingDate'] = $this->input->post('weddingDate');
		$weddingdetails['weddingCity'] = $this->input->post('weddingCity');
		$weddingdetails['weddingDistrict'] = $this->input->post('weddingDistrict');
		$weddingdetails['numberOfWeddingGuests'] = $this->input->post('numberOfWeddingGuests');
		$weddingdetails['weddingBudget'] = $this->input->post('weddingBudget');
	
		$query = $this->getCustomerDataModel->updateWeddingDetails($weddingdetails, $id);

		if($query){
			header('location:'.$this->updateCustomer($id));
			}
		}

		public function updateAccount(){

			$uid = $this->session->userdata('id');
		}

}
 
?>
