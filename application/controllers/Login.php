<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->helper('form');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{

		$this->load->view("login");
	}

	public function login_validation()
	{
		$this->load->library('form_validation');

		$hash = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run()) {
			//true  
			$email = $this->input->post('email');
			$password = $this->input->post('password');

		
			//model function  
			$this->load->model('Login_model');
			$encrypted_password = $this->Login_model->can_login($email);
			$id = $this->Login_model->getID($email);
			
			if ($encrypted_password) {
				if (password_verify($password, $encrypted_password)) {      //compares non hash with the hash
					// echo 'Password is valid!';
					$session_data = array(
						'email' => $email,
						'id' 	=> $id
					);

					$this->session->set_userdata($session_data);
					// $temp = $this->session->userdata('email');
					// echo $temp;
					$this->session->set_userdata('logged_in', true);
					//$data['blogs'] = $this->Logmodel_c->getBlog($cusNIC);
					$this->load->view("wedliohome");
				} else {
					echo 'Invalid password.';
					$this->session->set_flashdata('error', 'Invalid password');
					$this->load->view('login');
					$this->session->set_userdata('logged_in', false);
				}
			} else {
				$this->session->set_flashdata('error', 'Invalid email and password');
				$this->session->set_userdata('logged_in', false);
				$this->load->view('login');
			}
		} else {
			//false  

			$this->login();
		}

		// $temp = $this->session->userdata('email');
		// echo $temp;
	}

	function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->set_userdata('logged_in', false);

		$this->load->view('login');
	}
}
