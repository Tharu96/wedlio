<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class guestController extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('guestModel');
	}
 
	public function guest(){
		
		$data['guestList'] = $this->guestModel->getAllGuests();
        $this->load->view('guestList', $data);
        $this->load->view('customer/guestList/guestList');
	}
 
	public function addGuest(){
	
		$this->load->view('addGuest');

	}
 
	// public function addGuest(){
	// 	$user['name'] = $this->input->post('name');
	// 	$user['numberOfGuests'] = $this->input->post('numberOfGuests');
	// 	$user['contactNumber'] = $this->input->post('contactNumber');
    //     $user['address'] = $this->input->post('address');
    //     $user['email'] = $this->input->post('email');
    //     $user['myNotes'] = $this->input->post('myNotes');
 
	// 	$query = $this->Users_model->addGuest($guest);
 
	// 	if($query){
	// 		header('location:'.base_url().$this->index());
	// 	}
 
	// }
 
	// public function edit($id){
	// 	$data['guest'] = $this->guestModel->getUser($id);
	
	// 	$this->load->view('updateGuest', $data);

	// }
 
	// public function update($id){
	// 	$guest['name'] = $this->input->post('name');
	// 	$guest['contact_number'] = $this->input->post('contact_number');
	// 	$guest['email'] = $this->input->post('email');
	// 	$guest['address'] = $this->input->post('address');
 
	// 	$query = $this->Users_model->updateuser($guest, $id);
 
	// 	if($query){
	// 		header('location:'.base_url().$this->index());
	// 	}
	// }
 
	// public function delete($id){
	// 	$query = $this->Users_model->deleteuser($id);
 
	// 	if($query){
	// 		header('location:'.base_url().$this->index());
	// 	}
	// }
}
 
 
?>