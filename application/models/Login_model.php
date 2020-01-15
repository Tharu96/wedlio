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

		if ($query->num_rows() > 0) {
			$ret = $query->row();
			return $ret->password;
		} else {
			return false;
		}
	}
}