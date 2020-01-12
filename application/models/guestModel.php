<?php
	class guestModel extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
 
		public function getAllGuests(){
			$query = $this->db->get('guestlist');
			return $query->result(); 
		}
		public function insertGuest($guest){
			return $this->db->insert('guestlist', $guest);
		}
 
		public function getGuest($id){
			$query = $this->db->get_where('guestlist',array('id'=>$id));
			return $query->row_array();
		}
 

		public function updateGuest($guest, $id){
			$this->db->where('guestlist.id', $id);
			return $this->db->update('guestlist', $guest);
		}
 
		public function deleteGuest($id){
			$this->db->where('guestlist.id', $id);
			return $this->db->delete('guestlist');
		}

	}
?>
