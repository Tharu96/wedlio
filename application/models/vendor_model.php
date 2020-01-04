<?php
    class vendor_model extends CI_Model
    {
        function __construct()
        {
			parent::__construct();
			
        }

        public function getVendorRequests(){
			$query = $this->db->get('vendortemp');
        	return $query;
		}

		public function getUsers(){
			$query =$this->db->get('user');
			return $query;
		}

		public function getVendors(){
			$query =$this->db->get('vendor');
			return $query;
		}


		
    }
?>
