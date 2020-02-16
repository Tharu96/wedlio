<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Registration_model');
		$this->load->library('upload');
		$this->load->helper(array('form', 'url'));
	}
	
	public function index()
	{
		$this->load->database();
		$this->load->view('cusRegistration');		
	}

	public function addCustomer(){
		//save the password as a hash code
		$hash = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$date = date('Y-m-d H:i:s');
		$nextCusId = $this->getNextCusId();

		//image upload preferences
		$config['upload_path'] = './uploads/customer/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
		$config['max_height'] = 0;
		$config['file_name'] = $nextCusId.'.jpg';
        $config['overwrite'] = true;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            // $this->load->view('cusRegistration', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
        }

		//input data to be insert in to the user table
		$userdata = array(
			'userId' => $nextCusId,
            'firstName' => $this->input->post('firstname'),
            'lastName' => $this->input->post('lastname'),
            'NIC' => $this->input->post('NIC'),
            'contactNo' => $this->input->post('contactno'),
            'Image' => './uploads/customer/'.$nextCusId,
			'address' => $this->input->post('address'),
			'username' => $this->input->post('email'),
			'encrypted_password' => $hash,
			'user_role' => 'customer',
			'status'=>'1',
			'created_at'=> $date                 
		);

		//input data to be insert in to the customer table
		$customerdata = array(
			'userId' => $nextCusId,
			'birthdate' => $this->input->post('birthdate'),
			'gender' => $this->input->post('gender'),
			'created_at'=> $date  
		);
		
        // var_dump($data);
        $insert = $this->Registration_model->addCustomer($userdata, $customerdata);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/'));

	}

	public function getNextCusId(){
		$lastId = $this->Registration_model->getLastCusId();
		$lastId = substr($lastId,-3);
		$nextId = $lastId + 1;
		if($nextId < 100 && $nextId < 10){
			$nextIdstr = 'CUS00'.(string)$nextId;
		}else if($nextId < 100){
			$nextIdstr = 'CUS0'.(string)$nextId;
		}else{
			$nextIdstr = 'CUS'.(string)$nextId;
		}
		return $nextIdstr;
	}

	public function vendorRegistration(){
		$this->load->view('venRegistration');
	}

	public function addVendorTemp(){
		$hash = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$date = date('Y-m-d H:i:s');
		$nextVenId = $this->getNextVenId();

		//$categoryId = 

		//input data to be insert in to the temperory vendor table untill admin accepts the vendor
		$vendorTempdata = array(
			'userId' => $nextVenId,
            'firstName' => $this->input->post('firstname'),
            'lastName' => $this->input->post('lastname'),
            'NIC' => $this->input->post('NIC'),
            'contactNo' => $this->input->post('contactno'),
            'Image' => $this->input->post('image'),
			'address' => $this->input->post('address'),
			'username' => $this->input->post('email'),
			'encrypted_password' => $hash,
			'user_role' => 'vendor',
			'status'=>'1',
			'created_at'=> $date ,
			'businessRegNo' => $this->input->post('businessRegNo'),
			'businessName' => $this->input->post('businessName'),
			'description'=>$this->input->post('description'),
			'businessAddress' => $this->input->post('businessaddress'),
            'district' => $this->input->post('district'),
            'businessContactNo' => $this->input->post('businessContNo'),
			'businessEmail' => $this->input->post('businessEmail'),
			'categoryId' => '1'                
		);

		
		
        // var_dump($data);
        $insert = $this->Registration_model->addVendorTemp($vendorTempdata);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/'));

	}

	public function getNextVenId(){
		$lastId = $this->Registration_model->getLastVenId();
		$lastId = substr($lastId,-3);
		$nextId = $lastId + 1;
		if($nextId < 100 && $nextId < 10){
			$nextIdstr = 'VEN00'.(string)$nextId;
		}else if($nextId < 100){
			$nextIdstr = 'VEN0'.(string)$nextId;
		}else{
			$nextIdstr = 'VEN'.(string)$nextId;
		}
		return $nextIdstr;
	}



	
}
