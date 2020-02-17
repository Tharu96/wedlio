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
		$this->load->view('vendors/vendorDashboard/dashboard');
	}

	public function dashboard_vendor_details()
	{
		$userId=$this->session->userdata('id');
		$this->load->model('admin_panel');
		$vendor=$this->admin_panel->get_vendor($userId);
		$this->load->view('vendors/vendorDashboard/user',$vendor);
	}

	public function dashboard_vendor_packages()
	{
		$userId=$this->session->userdata('id');
		$this->load->model('admin_panel');
		$vendor_category=$this->admin_panel->get_categoryId($userId);
		if($vendor_category==7){
			$table_Name='photopackages';
		}
		if($vendor_category==10){
			$table_Name='florapackages';
		}
		$packages=$this->admin_panel->get_packages($userId,$table_Name);
		$data['packages']=$packages;
		$this->load->view('vendors/vendorDashboard/packages',$data);
	}

	public function dashboard_vendor_notification()
	{
		$this->load->view('vendors/vendorDashboard/notification');
	}

	public function vendor_profile_update($userId)
	{
		
		
		$this->form_validation->set_rules('businessName','Business Name','required');
		$this->form_validation->set_rules('firstName','First Name','required');
		$this->form_validation->set_rules('lastName','Last Name','required');
		$this->form_validation->set_rules('companyWebsite','Company Website','required');
		$this->form_validation->set_rules('companyAddress','Company Address','required');
		$this->form_validation->set_rules('businessDescription','Business Description','required');
		$this->form_validation->set_rules('contactEmail','Email','required');
		$this->form_validation->set_rules('businessContactNo','Business Contact No','required');
		$this->form_validation->set_rules('contactNo','Contact No','required');
	
		
		
		if($this->form_validation->run()){
			
			
			
			$data=array(
				
				"businessName" =>$this->input->post("businessName"),
				"firstName" =>$this->input->post("firstName"),
				"lastName" =>$this->input->post("lastName"),
				"companyWebsite" =>$this->input->post("companyWebsite"),
				"companyAddress" =>$this->input->post("companyAddress"),
				"businessDescription" =>$this->input->post("businessDescription"),
				"contactEmail" =>$this->input->post("contactEmail"),
				"businessContactNo" =>$this->input->post("businessContactNo"),
				"contactNo" =>$this->input->post("contactNo")
				
			);
			
			$config=[
				'upload_path'=>'./uploads',
				'allowed_types'=>'gif|png|jpg|jppeg'
			];

			

			// $this->load->library('upload',$config);
			

			// // $this->form_validation->set_error_delimiters();
			// echo 'test';
			// if(true){
			// 	echo 'test5';
			// 	$data=$this->input->post();
			// 	$info=$this->upload->data();
			// 	echo '<pre>';
			// 	print_r($info);
			// 	echo '</prev>';
			// 	$image_path=($info['raw_name'].$info['file_ext']);
				
			// 	print_r($image_path);
			// 	//exit();
				
				
			// 	$data['DpPath' ]=$image_path;
			 	unset($data['submit']);
				$this->load->model('vendor_model');
				if($this->vendor_model->updateVendor($userId,$data)){
					$this->session->set_flashdata('error', 'Update Successfullly');
					
				}
				else{
				  echo 'Failed to update Vendor Details';
				}
				exit();
			
		}else{
		  $this->dashboard_vendor_details();
		
	  	}

	}
	public function add_new_vendor_category()
	{
		$this->load->view('admin/addNewVendorCategory');
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
			'businessName' => $tempVendor->businessName,
			'businessDescription' => $tempVendor->businessDescription,
			'companyWebsite' => $tempVendor->companyWebsite,
			'companyAddress' => $tempVendor->companyAddress	,
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