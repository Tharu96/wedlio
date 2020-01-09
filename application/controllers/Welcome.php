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

	public function Budgeter()
	{
		$this->load->view('customer/budgeter');
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
