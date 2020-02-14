<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __constructor(){
		
	}

	public function add_new_vendor_category()
	{
		$this->load->view('admin/addNewVendorCategory');
	}
	
	public function category_save(){
		
		$this->form_validation->set_rules('categoryName','Art Name','required');
		$this->form_validation->set_rules('description','Artist Name','required');

		
		if($this->form_validation->run()){

			$data=array(
				"categoryName" =>$this->input->post("categoryName"),
				"description" =>$this->input->post("description")
			);
			echo 'testing1';
			$config=[
				'upload_path'=>'./uploads',
				'allowed_types'=>'gif|png|jpg|jppeg'
			];

			echo 'testing2';

			$this->load->library('upload',$config);
			echo 'testing3';
			$this->form_validation->set_error_delimiters();
			echo 'testing4';
			if($this->upload->do_upload()){
				echo 'testing5';
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