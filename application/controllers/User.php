<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		//data from users
		//$data['h'] = $this->user_model->get_users();

		// var_dump($data);     
		//$this->load->view('admin/user_details', $data);
	}

	public function view_all_users()
	{
		$data['h'] = $this->User_model->get_users();

		// var_dump($data);     

		$this->load->view('admin/viewallusers', $data);
	}


	public function view_user()
	{

		$data = array(
			'firstname' => 'firstName',
			'lastname' => 'lastName',
			'contactNo' => 'contact'
		);

		$this->load->view('admin/user.php');
	}
}