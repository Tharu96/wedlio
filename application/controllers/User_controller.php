<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		//data from users
		$data['h'] = $this->user_model->getUsers();

		// var_dump($data);     
		$this->load->view('admin/user_details', $data);
	}
}