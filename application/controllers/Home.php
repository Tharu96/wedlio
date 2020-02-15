<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __constructor(){
		$this->load->library('session');
	}
	

	public function index()
	{
		$this->load->view('WedlioHome');
	}

	// header 

	public function PlanningTools(){
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('footer');
	}

	public function WeddingVision()
	{	$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('header/weddingVision');
		$this->load->view('footer');	
	}

	public function LocalVendors()
	{	$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('header/localVendors');
		$this->load->view('footer');	
	}

	public function Budgeter()
	{	$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('header/budgeter');
		$this->load->view('footer');	
	}

	public function Gallery()
	{	$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('header/gallery');
		$this->load->view('footer');	
	}

	public function customerRegistration(){  
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view("header/customerRegistration");  
		$this->load->view('footer');
        
	  }

	  public function customerDashboard(){ 
<<<<<<< HEAD
		$this->load->view("customer/customerDashboard");
		$this->load->view('header');
		$this->load->view('navbar');
=======
		$this->load->view("customer/customerDashboardHeader");
		$this->load->view("customer/customerDashboard");

>>>>>>> 0438689a3f0eb88e7634ae0e4a4028e409974674
	
		

		
        
	  }

	  public function vendorRegistration(){  
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view("header/vendorRegistration");  
		$this->load->view('footer');
        
	  } 

	public function login(){  
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view("header/login");  
		$this->load->view('footer');
        
	  } 




		/* local vendors */



	public function receptionVenues()
	{	
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('vendors/photographers');
		$this->load->view('footer');
	}

	public function photographers()
	{	
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('vendors/photographers');
		$this->load->view('footer');
	}

	public function bridalSalons()
	{	
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('vendors/bridalSalons');
		$this->load->view('footer');
	}


	public function weddingBands()
	{	
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('vendors/weddingBands');
		$this->load->view('footer');
	}

	public function djs()
	{	
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('vendors/djs');
		$this->load->view('footer');
	}

	public function florists()
	{	
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('vendors/florists');
		$this->load->view('footer');
	}

	public function weddingCake()
	{	
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('vendors/weddingCake');
		$this->load->view('footer');
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
