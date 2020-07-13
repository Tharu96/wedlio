<?php
class Customer_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function add_customer($userdata, $customerdata)
	{
		$this->db->insert('user', $userdata);
		$this->db->insert('customer', $customerdata);
		return 1;
	}

	public function delete_customer($userId)
	{
		$this->db->where('userId', $userId);
		$this->db->delete('customer');
	}

	public function get_customer($userId)
	{
		// $q = $this->db->select('*')->from('vendortemp')->where('tempId',$tempId)->get();
		// return $q->result();

		$query = $this->db->get_where('customer', array('userId' => $userId));
		return $query->row();
	}
	
	public function get_user($userId)
	{

		$this->db->where('userId',$userId);
		$customer=$this->db->get("user");
		if($customer)
		{
			return $customer->row(0);
		}else{
			return false;
		}
	}

	public function get_all_customers()
	{
		$query = $this->db->get('customer');
		return $query;
	}

	public function add_customer_requests($data){
		$this->db->insert('customerrequests',$data);
		
	}

	public function get_wedding_detail($customerId){
		$query=$this->db->get_where('weddingdetails', array('userId' => $customerId));
		return $query->row();
	}

	public function load_all_customer_requests($vendorId){
		$this->db->where('vendorId',$vendorId);
            $customerrequests=$this->db->get("customerrequests");
            if($customerrequests-> num_rows()>0){
                return $customerrequests->result();
            }
	}

	public function getLastCusId()
	{
		$this->db->select('userId');
		$this->db->from('customer');
		$this->db->order_by('createdAt', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		// SELECT * FROM `customer` order by created_at desc LIMIT 1
		$ret = $query->row();
		return $ret->userId;
	}
}