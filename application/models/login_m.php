<?php  
	class login_m extends CI_Model{  

		function can_login($email){  
			$this->db->select('encrypted_password');
			$this->db->from('user');
			$this->db->where('username', $email);    
			$query = $this->db->get();  
			//SELECT * FROM users WHERE username = '$username' AND password = '$password'  
			
			if($query->num_rows() > 0){ 
				$ret = $query->row();
				return $ret->encrypted_password; 
			}  
			else{  
				return false;       
			}  
		}

		
	}  
 ?>
