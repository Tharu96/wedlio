<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Registration_model');
	}
	
	public function index()
	{
		$this->load->database();
		$this->load->view('cusRegistration');		
	}

	public function addCustomer(){
		$hash = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$date = date('Y-m-d H:i:s');
		$nextUserId = $this->getNextUserId();

		$userdata = array(
			'userId' => $nextUserId,
            'firstName' => $this->input->post('firstname'),
            'lastName' => $this->input->post('lastname'),
            'NIC' => $this->input->post('NIC'),
            'contactNo' => $this->input->post('contactno'),
            'Image' => $this->input->post('image'),
			'address' => $this->input->post('address'),
			'username' => $this->input->post('email'),
			'encrypted_password' => $hash,
			'user_role' => 'admin',
			'status'=>'1',
			'created_at'=> $date                 
		);

		$customerdata = array(
			'userId' => $nextUserId,
			'birthdate' => $this->input->post('birthdate'),
			'gender' => $this->input->post('gender'),
			'created_at'=> $date  
		);
		
        // var_dump($data);
        $insert = $this->Registration_model->addCustomer($userdata, $customerdata);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/'));

	}

	public function getNextUserId(){
		$lastId = $this->Registration_model->getLastUserId();
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

} 

?>
