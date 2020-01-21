<?php
	class getCustomerDataModel extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
		
		public function getCustomerData(){
			$query = $this->db->get(customer);
			return $query();
		}
	}
?>
