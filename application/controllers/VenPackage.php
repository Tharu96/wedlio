<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VenPackage extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load cart library
		$this->load->library('cart');
		$this->load->library('session');
        
        // Load product model
        $this->load->model('venpackages');
    }
    
    function index(){
        $data = array();
        
        // Fetch products from the database
        $data['packages'] = $this->venpackages->getRows();
        
        // Load the product list view
        $this->load->view('packages/photo', $data);
    }
    
    function addToCart($userId, $pkgId){
        
        // Fetch specific product by ID
        $packages = $this->venpackages->getRows($userid, $pkgId);
        
        // Add product to the cart
        $data = array(
			'id'    => $packages['userId'],
			'pkgId' => $packages['pkgId'],
            'qty'    => 1,
            'price'    => $packages['price'],
            'name'    => $packages['name'],
            'image' => $packages['image']
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        redirect('cart/');
    }
    
}
