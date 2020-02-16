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

	public function vendorDashboard(){
		$this->load->view('vendors/vendorDashboard/dashboard');
	}

	public function load_vendor_Details($vendorId){
		$this->load->model('admin_panel');
		$vendor=$this->admin_panel->get_vendor($vendorId);
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
		$vendor=$this->admin_panel->get_vendor($vendorId);

		$vendor_category=$this->admin_panel->get_categoryId($vendorId);

		if($vendor_category==7){
			$table_Name='photopackages';
		}
		if($vendor_category==10){
			$table_Name='florapackages';
		}

		
		
		$packages=$this->admin_panel->get_packages($vendorId,$table_Name);
		$data["vendor_details"]=$vendor;
		$data["vendor_packages"]=$packages;
		$this->load->view('vendors/vendor_Profile',$data);
		
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



} 
