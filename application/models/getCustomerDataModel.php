<?php
	class getCustomerDataModel extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
		
		public function getCustomerData($id){
			$this->db->select('*');
			$this->db->from('weddingdetails');
			$this->db->where('userID', $id);
			$query = $this->db->get();
			return $query->row_array();
		}

		public function updateWeddingDetails($weddingdetails, $id){
			$this->db->where('weddingdetails.userID', $id);
			return $this->db->update('weddingdetails', $weddingdetails);
		
		}

	}
?>
