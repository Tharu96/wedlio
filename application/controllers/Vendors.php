
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendors extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('vendor_model');
		$this->load->library('upload');
		$this->load->helper(array('form', 'url'));
	}
	
	public function index()
	{
		$data['h']=$this->vendor_model->getVendorRequests();   
		// var_dump($data);     
		$this->load->view('admin/viewVendors', $data);  	
	}

		
}
