<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vendor extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('vendor_model');
		$this->load->library('upload');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		//data from vendortemp
		//$data['h'] = $this->vendor_model->getVendorRequests();

		// data from vendor
		//$data['k'] = $this->vendor_model->getVendors();

		// var_dump($data);     
		//$this->load->view('admin/viewVendors', $data);
	}

	public function vendor_registration()
	{
		$this->load->view('registrationvendor');
	}

	public function add_vendor_temp()
	{
		$hash = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$date = date('Y-m-d H:i:s');
		//$nextVenId = $this->getNextVenId();

		$nic = $this->input->post('nic');

		//input data to be insert in to the temperory vendor table untill admin accepts the vendor
		$vendorTempdata = array(
			//'tempId' => $nextVenId,
			'businessEmail' => $this->input->post('businessemail'),
			'password' => $hash,
			'businessName' => $this->input->post('businessname'),
			'businessDescription' => $this->input->post('businessdescription'),
			'companyWebsite' => $this->input->post('companywebsite'),
			'businessAddress' => $this->input->post('businessaddress'),
			'district' => $this->input->post('district'),
			'companyDescription' => $this->input->post('companydescription'),
			'businessContactNo' => $this->input->post('businesscontactno'),
			'firstName' => $this->input->post('firstname'),
			'lastName' => $this->input->post('lastname'),
			'contactEmail' => $this->input->post('contactemail'),
			'contactNo' => $this->input->post('contactno'),
			'nic' => $this->input->post('nic'),
			'createdAt' => $date
		);

		//$categoryId = 
		//image upload preferences
		$config['upload_path'] = './uploads/vendor/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 0;
		$config['max_width'] = 0;
		$config['max_height'] = 0;
		$config['file_name'] = $vendorTempdata['nic'] . '.jpg';
		$config['overwrite'] = true;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('registrationvendor', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());
			// $this->load->view('upload_success', $data);
		}


		// var_dump($data);
		$insert = $this->Vendor_model->add_vendor_temp($vendorTempdata);
		echo json_encode(array("status" => TRUE));
		redirect(base_url('index.php/'));
	}

	public function add_vendor($tempId)
	{
		// $hash = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		// $date = date('Y-m-d H:i:s');
		// echo "<script>console.log('Reached')</script>";
		// $tempId = $_POST['tempId'];

		$tempVendor = $this->Vendor_model->get_temp_vendor($tempId);
		$date = date('Y-m-d H:i:s');

		var_dump($tempVendor);

		// echo $tempVendor->firstname;

		$nextVenId = $this->get_next_venId();
		echo $nextVenId;

		$nic = $this->input->post('nic');

		//split the tempvendor data into user table and vendor table after admin confirm the vendor
		$userdata = array(
			'userId' => $nextVenId,
			'email' => $tempVendor->businessEmail,
			'password' => $tempVendor->password,
			'userRole' => 'vendor',
			'status' => '1',
			'level' => '2',
			'createdAt' => $date
		);

		// $nic = $this->input->post('NIC');

		$vendordata = array(
			'userId' => $nextVenId,
			'businessName' => $tempVendor->businessname,
			'businessDescription' => $tempVendor->businessDescription,
			'companyWebsite' => $tempVendor->companyWebsite,
			'companyAddress' => $tempVendor->companyAddress,
			'district' => $tempVendor->district,
			'businessContactNo' => $tempVendor->businessContactNo,
			'companyDescription' => $tempVendor->companyDescription,
			'firstName' => $tempVendor->firstName,
			'lastName' => $tempVendor->lastName,
			'contactEmail' => $tempVendor->contactEmail,
			'nic' => $tempVendor->nic,
			'contactNo' => $tempVendor->contactNo,
			'createdAt' => $tempVendor->createdAt
		);

		// var_dump($data);
		$insert = $this->Vendor_model->add_vendor($userdata, $vendordata);
		$this->Vendor_model->delete_tempVendor($tempId);
		// echo json_encode(array("status" => TRUE));

		//    $this->load->view('viewVendors');
		redirect(base_url('index.php/vendor/view_all_vendors'));
	}


	public function get_next_venId()
	{
		$lastId = $this->Vendor_model->get_last_venId();
		$lastId = substr($lastId, -3);
		$nextId = $lastId + 1;
		if ($nextId < 100 && $nextId < 10) {
			$nextIdstr = 'VEN00' . (string) $nextId;
		} else if ($nextId < 100) {
			$nextIdstr = 'VEN0' . (string) $nextId;
		} else {
			$nextIdstr = 'VEN' . (string) $nextId;
		}
		return $nextIdstr;
	}

	public function view_all_vendors()
	{
		$data['h'] = $this->Vendor_model->get_all_temporary_vendors();

		$data['k'] = $this->Vendor_model->get_all_vendors();

		$this->load->view('admin/viewallvendors', $data);
	}
}