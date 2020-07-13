<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class guestController extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('guestModel');
		$this->load->model('getCustomerDataModel');
	}
 
	public function showGuestList(){
		$uid = $this->session->userdata('id');
		$data['customerData'] = $this->getCustomerDataModel->getAccountData($uid);
		$data['weddingData'] = $this->getCustomerDataModel->getWeddingData($uid);
		$this->load->view("customer/customerDashboardHeader",$data);
		$data['guestArray'] = $this->guestModel->getAllGuests();
        $this->load->view('customer/guestList/guestList', $data);
	}
 
	public function addGuest(){
		$uid = $this->session->userdata('id');
		$data['customerData'] = $this->getCustomerDataModel->getAccountData($uid);
		$data['weddingData'] = $this->getCustomerDataModel->getWeddingData($uid);
		$this->load->view("customer/customerDashboardHeader",$data);
		$this->load->view('customer/guestList/addGuest');
	}
 
	public function insertGuest(){
		$guest['name'] = $this->input->post('name');
		$guest['numberOfGuests'] = $this->input->post('numberOfGuests');
		$guest['contactNumber'] = $this->input->post('contactNumber');
		$guest['address'] = $this->input->post('address');
		$guest['email'] = $this->input->post('email');
		$guest['myNotes'] = $this->input->post('myNotes');

 
		$query = $this->guestModel->insertGuest($guest);
 
		if($query){
			header('location:'.base_url('index.php/guestController/showGuestList').$this->showGuestList());
		}
 
	}
 
	public function editGuest($gid){
		$data['guest'] = $this->guestModel->getGuest($gid);
		$uid = $this->session->userdata('id');
		$data['customerData'] = $this->getCustomerDataModel->getAccountData($uid);
		$data['weddingData'] = $this->getCustomerDataModel->getWeddingData($uid);
		$this->load->view("customer/customerDashboardHeader",$data);;
		$this->load->view('customer/guestList/updateGuest', $data);
	}
 
	public function updateGuest($id){
		$data['name'] = $this->input->post('name');
		$data['numberOfGuests'] = $this->input->post('numberOfGuests');
		$data['contactNumber'] = $this->input->post('contactNumber');
		$data['address'] = $this->input->post('address');
		$data['email'] = $this->input->post('email');
		$data['myNotes'] = $this->input->post('myNotes');

 
		$query = $this->guestModel->updateGuest($data,$id);
 
		if($query){
			header('location:'.base_url('index.php/guestController/showGuestList').$this->showGuestList());
		}
	}
 
	public function deleteGuest($id){
		$query = $this->guestModel->deleteGuest($id);
 
		if($query){
			header('location:'.base_url('index.php/guestController/showGuestList').$this->showGuestList());
		}
	}

	public function sendEmail($gid){
		$uid = $this->session->userdata('id');
		$data['guestdetails'] = $this->guestModel->getGuest($gid);
		$data['customerData'] = $this->getCustomerDataModel->getAccountData($uid);
		$data['userData'] = $this->getCustomerDataModel->getUserData($uid);

		$this->load->view("customer/customerDashboardHeader",$data);
		$this->load->view('customer/guestList/sendMail',$data);	
	}

	public function send(){
		$to =  $this->input->post('from');  // User email pass here
		$subject = 'Wedlio Invitations';

		$from = 'wedlioweddingplanners@gmail.com';              // Pass here your mail id

		$emailContent = '<!DOCTYPE><html><head></head><body>';

		$emailContent .= $this->input->post('message');  //   Post message available here

		$emailContent .= "</body></html>";
					


		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '60';

		$config['smtp_user']    = 'wedlioweddingplanners@gmail.com';    //Important
		$config['smtp_pass']    = '123!@#qwe';  //Important

		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'html'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not 

		

		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->from($from);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($emailContent);
		$this->email->send();

		$this->session->set_flashdata('msg',"Mail has been sent successfully");
		$this->session->set_flashdata('msg_class','alert-success');
		return redirect($this->agent->referrer());
	}


}
 
?>