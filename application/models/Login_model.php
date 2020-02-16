<?php
class Login_model extends CI_Model
{

	function can_login($email)
	{
		$this->db->select('password, userId');
		$this->db->from('user');
		$this->db->where('email', $email);
		$query = $this->db->get();
		//SELECT * FROM users WHERE username = '$username' AND password = '$password'  
		// var_dump($query);

		if ($query->num_rows() > 0) {
			$ret = $query->row();
			// var_dump($ret);
			return array('password'=>$ret->password, 'uid'=>$ret->userId);
		} else {
			return false;
		}
	}
}
