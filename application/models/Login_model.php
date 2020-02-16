<?php
class Login_model extends CI_Model
{

	function can_login($email)
	{
		$this->db->select('password');
		$this->db->from('user');
		$this->db->where('email', $email);
		$query = $this->db->get();
		//SELECT * FROM users WHERE username = '$username' AND password = '$password'  
		// var_dump($query);

		if ($query->num_rows() > 0) {
			$ret = $query->row();
			// var_dump($ret);
			return $ret->password;
		} else {
			return false;
		}
	}

	function getID($email)
	{
		$this->db->select('userId');
		$this->db->from('user');
		$this->db->where('email', $email);
		$query = $this->db->get();
		//SELECT * FROM users WHERE username = '$username' AND password = '$password'  

		if ($query->num_rows() > 0) {
			$ret = $query->row();
			return $ret->userId;
		} else {
			return false;
		}
	}


	function getuserlevel($email)
	{
		$this->db->select('level');
		$this->db->from('user');
		$this->db->where('email', $email);
		$query = $this->db->get();
		//SELECT * FROM users WHERE username = '$username' AND password = '$password'  

		if ($query->num_rows() > 0) {
			$ret = $query->row();
			return $ret->level;
		} else {
			return false;
		}
	}

}

