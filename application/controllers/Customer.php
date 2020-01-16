<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model');
		$this->load->library('upload');
		$this->load->helper(array('form', 'url'));
	}


	public function index()
	{
		$this->load->database();
		//$this->load->view('vendorDisplay');
	}

	public function customer_registration()
	{
		$this->load->view('registrationcustomer');
	}

	public function add_customer()
	{
		//save the password as a hash code
		$hash = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$date = date('Y-m-d H:i:s');
		$nextCusId = $this->getNextCusId();

		$nic = $this->input->post('nic');

		//input data to be insert in to the user table
		$customerdata = array(
			'userId' => $nextCusId,
			'firstName' => $this->input->post('firstname'),
			'lastName' => $this->input->post('lastname'),
			'nic' => $this->input->post('nic'),
			'contactNo' => $this->input->post('contactno'),
			'image' => './uploads/customer/' . $nic . '.jpg',
			'address' => $this->input->post('address'),
			'dateOfBirth' => $this->input->post('dob'),
			'gender' => $this->input->post('gender'),
			'createdAt' => $date
		);


		//image upload preferences
		$config['upload_path'] = './uploads/customer/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 0;
		$config['max_width'] = 0;
		$config['max_height'] = 0;
		$config['file_name'] = $customerdata['nic'] . '.jpg';
		$config['overwrite'] = true;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('registrationcustomer', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());
			// $this->load->view('upload_success', $data);
		}

		//input data to be insert in to the customer table
		$userdata = array(
			'userId' => $nextCusId,
			'email' => $this->input->post('email'),
			'password' => $hash,
			'userRole' => 'customer',
			'status' => '1',
			'level' => '3',
			'createdAt' => $date
		);

		// var_dump($data);
		$insert = $this->Customer_model->add_customer($userdata, $customerdata);
		echo 'Successfully Registered';
		echo json_encode(array("status" => TRUE));
		redirect(base_url('index.php/'));
	}

	public function view_all_customers()
	{
		$data['h'] = $this->Customer_model->get_all_customers();
		$this->load->view('admin/viewallcustomers', $data);
	}


	public function getNextCusId()
	{
		$lastId = $this->Customer_model->getLastCusId();
		$lastId = substr($lastId, -3);
		$nextId = $lastId + 1;
		if ($nextId < 100 && $nextId < 10) {
			$nextIdstr = 'CUS00' . (string) $nextId;
		} else if ($nextId < 100) {
			$nextIdstr = 'CUS0' . (string) $nextId;
		} else {
			$nextIdstr = 'CUS' . (string) $nextId;
		}
		return $nextIdstr;
	}
}
