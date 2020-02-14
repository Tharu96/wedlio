<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __constructor(){
		$this->load->library('session');
	}
	
	public function index()
	{
		$this->load->view('WedlioHome');
	}

	public function localVendors()
	{
		$this->load_all_vendor_categories();
	}

	public function load_all_vendor_categories(){
		$this->load->model('admin_panel');
		$vendorCategories=$this->admin_panel->get_all_vendor_categories();
		$this->load->view('vendors/localVendorsCategories',['categories'=>$vendorCategories]);
	}

	public function planningTools()
	{
		$this->load->view('admin/addNewVendorCategory');
		
	}

	

	public function load_vendors($categoryId)
	{	
		$this->load->model('admin_panel');
		$headerImagePath=$this->admin_panel->getHeaderImagePath($categoryId);
		$vendorList=$this->admin_panel->load_all_vendors($categoryId);
		$data['headerImagePath']=$headerImagePath;
		$data['vendors']=$vendorList;
		$this->load->view('vendors/localVendors',$data);

	}

	public function load_vendor_Accounts($vendorId){
		$this->load->model('admin_panel');
		$vendor["vendor_details"]=$this->admin_panel->get_vendor($vendorId);
		$this->load->view('vendors/vendor_Profile',$vendor);
		
	}


	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}

	public function user()
	{
		$this->load->view('admin/user');
	}

	public function user_details()
	{
		$this->load->view('admin/user_details');
	}

	public function register(){
		$this->load->view('register');
	}

	public function viewAllVendors(){
		$this->load->view('admin/viewVendors');
	}

	public function viewAllCustomers(){
		$this->load->view('admin/viewCustomers');
	}

	public function notification()
	{
		$this->load->view('admin/notification');
	}


} ?>
