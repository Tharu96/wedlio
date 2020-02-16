<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('user_model');
	}

	public function index()
	{
		//data from users
		//$data['h'] = $this->user_model->getUsers();

		// var_dump($data);     
		//$this->load->view('admin/user_details', $data);
		$this->load->view('admin/dashboard');
	}


	public function load_admin_data(){
		
		$adminId=$this->session->userdata('id');
		$this->load->model('admin_panel');
		$admin=$this->admin_panel->get_admin($adminId);
		$this->load->view('admin/user',$admin);
	}

	public function add_new_vendor_category()
	{
		$this->load->view('admin/addNewVendorCategory');
	}
	
	public function category_save(){
		
		$this->form_validation->set_rules('categoryName','Category Name','required');
		$this->form_validation->set_rules('description','Description','required');

		
		if($this->form_validation->run()){

			$data=array(
				"categoryName" =>$this->input->post("categoryName"),
				"description" =>$this->input->post("description")
			);
			
			$config=[
				'upload_path'=>'./uploads',
				'allowed_types'=>'gif|png|jpg|jppeg'
			];

			

			$this->load->library('upload',$config);
			
			$this->form_validation->set_error_delimiters();
			
			if($this->upload->do_upload()){
				
				$data=$this->input->post();
				$info=$this->upload->data();
				echo '<pre>';
				print_r($info);
				echo '</prev>';
				$image_path=($info['raw_name'].$info['file_ext']);
				
				print_r($image_path);
				//exit();
				
				$data['imagePath' ]=$image_path;
			 	unset($data['submit']);
				$this->load->model('admin_panel');
				if($this->admin_panel->add_vendor_category($data)){
					echo 'New Vendor Category added Successfully';
				}
				else{
				  echo 'Failed to add new vendor category';
				}
				exit();
			}
		}else{
		  $this->add_new_vendor_category();
	  	}

	}


    
} ?>
