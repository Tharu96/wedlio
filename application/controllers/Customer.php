<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}
	
	
	public function index()
	{
		$this->load->view('vendorDisplay');
	}

	public function marketplace(){
		$this->load->view('customer/vendors'); //this is not working. :/ same as vendorDisplay
	}

	public function photographers(){
		$this->load->view('customer/photography');
	}



	
	

} ?>
