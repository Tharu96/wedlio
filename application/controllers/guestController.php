<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class guestController extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('guestModel');
	}
 
	public function showGuestList(){
		$this->load->view("customer/customerDashboardHeader");
		$data['guestArray'] = $this->guestModel->getAllGuests();
        $this->load->view('customer/guestList/guestList', $data);
	}
 
	public function addGuest(){
		$this->load->view("customer/customerDashboardHeader");
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
 
	public function editGuest($id){
		$this->load->view("customer/customerDashboardHeader");
		$data['guest'] = $this->guestModel->getGuest($id);
		$this->load->view('customer/guestList/updateGuest', $data);
	}
 
	public function updateGuest($id){
		$guest['name'] = $this->input->post('name');
		$guest['numberOfGuests'] = $this->input->post('numberOfGuests');
		$guest['contactNumber'] = $this->input->post('contactNumber');
		$guest['address'] = $this->input->post('address');
		$guest['email'] = $this->input->post('email');
		$guest['myNotes'] = $this->input->post('myNotes');

 
		$query = $this->guestModel->updateGuest($guest,$id);
 
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
}
 
?>