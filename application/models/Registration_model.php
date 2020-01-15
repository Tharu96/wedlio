<?php
    class Registration_model extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }

        public function addCustomer($userdata, $customerdata)
        {
            $this->db->insert('user', $userdata);
            $this->db->insert('customer', $customerdata);
            return 1;
		}

		public function addVendorTemp($vendorTempdata)
        {
            $this->db->insert('vendorTemp',$vendorTempdata);
            // $this->db->insert('vendorTemp',);
            return 1;
		}

		public function addVendor($userdata, $vendordata){
			$this->db->insert('user', $userdata);
            $this->db->insert('vendor', $vendordata);
            return 1;
		}

		public function deleteTempVendor($tempId){
			$this->db->where('tempId',$tempId );
			$this->db->delete('vendorTemp');
		}
		
		public function getTempVendor($tempId) {
			// $q = $this->db->select('*')->from('vendortemp')->where('tempId',$tempId)->get();
			// return $q->result();

			$query=$this->db->get_where('vendortemp', array('tempId'=>$tempId));
			return $query->row();
		}
		


        public function getLastCusId(){
            $this->db->select('userId');
            $this->db->from('customer');
            $this->db->order_by('created_at', 'DESC');
            $this->db->limit(1);
            $query = $this->db->get();
            // SELECT * FROM `customer` order by created_at desc LIMIT 1
            $ret = $query->row();
            return $ret->userId;
		}
		
		public function getLastVenId(){
            $this->db->select('userId');
            $this->db->from('vendor');
            $this->db->order_by('created_at', 'DESC');
            $this->db->limit(1);
            $query = $this->db->get();
            // SELECT * FROM `vendor` order by created_at desc LIMIT 1
            $ret = $query->row();
            return $ret->userId;
		}
		
		


    }
?>
