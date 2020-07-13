<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Preferences extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library( 'session' );
        $this->load->model( 'Preferences_model' );
        $this->load->helper( array( 'form', 'url' ) );

    }

    public function index() {
        $this->load->view( 'pref' );
        $this->Preferences_model->check();
    }

    public function photography() {
        $photopref = array(
            'userId' => $this->session->userdata( 'id' ),
            'price' => $this->input->post( 'price' ),
            'description' => $this->input->post( 'description' )
        );

        $insert = $this->Preferences_model->add_photopreference( $photopref );
        $match['packages'] = $this->Preferences_model->photofilter( $photopref['price'] );

        // $this->load->model( 'admin_panel' );
        
        // foreach($match as $package):
        //     $vendorId=$package['userId'];
        //     $vendorNames['vendorNames']=$this->admin_panel->get_vendor_name( $vendorId );
        // endforeach;
        // print_r(vendorNames);
        
        // echo json_encode( array( 'status' => TRUE ) );
        $this->load->view( 'generatedpackages', $match );
    }

    public function reception() {
        $receptionpref = array(
            'userId' => $this->session->userdata( 'id' ),
            'price' => $this->input->post( 'price' ),
            'capacity' => $this->input->post( 'capacity' ),
            'description' => $this->input->post( 'description' )
        );

        $insert = $this->Preferences_model->add_receptionpreference( $receptionpref );
        $match['packages'] = $this->Preferences_model->receptionfilter( $receptionpref['price'], $receptionpref['capacity'] );
        echo 'preference added';
        echo json_encode( array( 'status' => TRUE ) );
        $this->load->view( 'generatedpackages', $match );
    }

    public function florist() {
        $floristpref = array(
            'userId' => $this->session->userdata( 'id' ),
            'price' => $this->input->post( 'price' ),
            'description' => $this->input->post( 'description' )
        );
        $insert = $this->Preferences_model->add_floristpreference( $floristpref );
        $match['packages'] = $this->Preferences_model->floristfilter( $floristpref['price'] );
        
        
        $this->load->view( 'generatedpackages', $match );
    }

    public function djandband() {
        $djandbandpref = array(
            'userId' => $this->session->userdata( 'id' ),
            'price' => $this->input->post( 'price' ),
            'hours' => $this->input->post( 'capacity' ),
            'description' => $this->input->post( 'description' )
        );

        $insert = $this->Preferences_model->add_djandbandpreference( $djandbandpref );
        $match['packages'] = $this->Preferences_model->receptionfilter( $djandbandpref['price'], $djandbandpref['hours'] );
        echo 'preference added';
        echo json_encode( array( 'status' => TRUE ) );
        $this->load->view( 'generatedpackages', $match );
    }

}