<?php
	class guestModel extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
 
		public function getAllGuests(){
			$query = $this->db->get('guestList');
			return $query->result(); 
		}
 
		public function addGuest($user){
			return $this->db->insert('customers', $user);
		}
 
		public function getGuest($ID){
			$query = $this->db->get_where('customers',array('ID'=>$ID));
			return $query->row_array();
		}
 
		// public function updateuser($user, $ID){
		// 	$this->db->where('customers.ID', $ID);
		// 	return $this->db->update('customers', $user);
		// }
 
		// public function deleteuser($ID){
		// 	$this->db->where('customers.ID', $ID);
		// 	return $this->db->delete('customers');
		// }
 
	}
?>
