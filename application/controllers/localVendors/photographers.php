<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photographers extends CI_Controller {

	public function __constructor(){
		
	}
	
	

	public function darkroom()
	{
		$this->load->view('vendor/photographers/darkroom');
	}
} ?>