
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendors extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('vendor_model');
		$this->load->library('upload');
		$this->load->helper(array('form', 'url'));
	}
	
	public function index()
	{
		//data from vendortemp
		$data['h']=$this->vendor_model->getVendorRequests();

		// data from vendor
		$data['k'] = $this->vendor_model->getVendors();   

		// var_dump($data);     
		$this->load->view('admin/viewVendors', $data);  	
	}

	public function addVendor($tempId){
		// $hash = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		// $date = date('Y-m-d H:i:s');
		// echo "<script>console.log('Reached')</script>";
		// $tempId = $_POST['tempId'];

		$tempVendor = $this->vendor_model->getTempVendor($tempId); 
		$date = date('Y-m-d H:i:s');

		var_dump($tempVendor);

		// echo $tempVendor->firstname;

		$nextVenId = $this->getNextVenId();
		echo $nextVenId;

		$nic = $this->input->post('NIC');

		//split the tempvendor data into user table and vendor table after admin confirm the vendor
		$userdata = array(
			'userId' => $nextVenId,
            'firstName' => $tempVendor->firstName,
            'lastName' => $tempVendor->lastName,
            'NIC' => $tempVendor->NIC,
            'contactNo' => $tempVendor->contactNo,
            'Image' => $tempVendor->Image,
			'address' => $tempVendor->address,
			'username' => $tempVendor->username,
			'encrypted_password' => $tempVendor->encrypted_password,
			'user_role' => 'vendor',
			'status'=>'1',
			'created_at'=> $date                
		);

		// $nic = $this->input->post('NIC');

		$vendordata = array(
			// 'userId' => $nextVenId,
            'userId' => $nextVenId,
			'businessRegNo' =>$tempVendor->businessRegNo,
			'businessName' => $tempVendor->businessName,
			'description'=>$tempVendor->description,
			'businessAddress' => $tempVendor->businessAddress,
            'district' => $tempVendor->district,
            'businessContactNo' => $tempVendor->businessContactNo,
			'businessEmail' => $tempVendor->businessEmail,
			'categoryId' => $tempVendor->categoryId, 
			'created_at'=> $date               
		);
		
        // var_dump($data);
		$insert = $this->vendor_model->addVendor($userdata,$vendordata);
		$this->vendor_model->deleteTempVendor($tempId);
	   // echo json_encode(array("status" => TRUE));
	   
	//    $this->load->view('viewVendors');
        redirect(base_url('index.php/vendors'));

	}


	public function getNextVenId(){
		$lastId = $this->vendor_model->getLastVenId();
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
