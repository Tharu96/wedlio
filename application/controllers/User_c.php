<?php
class User_c extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('user_model');
	}

	public function savedata()
	{
		$this->load->view('registration');
		if($this->input->post('save'))
		{
		$n=$this->input->post('name');
		$e=$this->input->post('email');
		$m=$this->input->post('mobile');
		$this->Hello_Model->saverecords($n,$e,$m);		
		redirect("Hello/dispdata");  
		}
	}
	
	public function dispdata()
	{
	$result['data']=$this->Hello_Model->displayrecords();
	$this->load->view('display_records',$result);
	}
}
?>
