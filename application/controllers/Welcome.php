<?php
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





	public function user()
	{
		$this->load->view('admin/user');
	}



	public function register()
	{
		$this->load->view('register');
	}





	public function notification()
	{
		$this->load->view('admin/notification');
	}
}