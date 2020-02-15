<?php
class User_model extends CI_Model
{
	function saverecords($name, $email, $mobile)
	{
		$query = "insert into user values('','$name','$email','$mobile')";
		$this->db->query($query);
	}

	function get_users()
	{
		// $query = $this->db->query("select * from user");
		// return $query->result();
		// $query = $this->db->get('user');
		// return $query;
		$query = $this->db->get('user');
		return $query;
	}
}