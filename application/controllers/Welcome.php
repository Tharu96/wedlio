<?php
<<<<<<< HEAD
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
=======
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __constructor()
	{
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('wedliohome');
>>>>>>> 0438689a3f0eb88e7634ae0e4a4028e409974674
	}

	public function localVendors()
	{
<<<<<<< HEAD
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

=======
		$this->load->view('localVendors');
	}

	public function reception_venues()
	{
		$this->load->view('reception_venues');
	}

	public function photographers()
	{
		$this->load->view('photographers');
	}

	public function bridal_salons()
	{
		$this->load->view('bridalsalons');
	}

	public function dj_bands()
	{
		$this->load->view('dj&bands');
	}

	public function florists()
	{
		$this->load->view('florists');
	}

	public function wedding_cake()
	{
		$this->load->view('wedding_cake');
	}





>>>>>>> 0438689a3f0eb88e7634ae0e4a4028e409974674
	public function user()
	{
		$this->load->view('admin/user');
	}

<<<<<<< HEAD
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
=======


	public function register()
	{
		$this->load->view('register');
	}




>>>>>>> 0438689a3f0eb88e7634ae0e4a4028e409974674

	public function notification()
	{
		$this->load->view('admin/notification');
	}
<<<<<<< HEAD


} ?>
=======
}
>>>>>>> 0438689a3f0eb88e7634ae0e4a4028e409974674
