<?php
class Vendor_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Vendor_model');
		$this->load->library('upload');
		$this->load->helper(array('form', 'url'));
	}

	public function updateVendor($vendorId,$data){
		$this->db->where('userId',$vendorId);
		if( $this->db->update('vendor',$data)){
			return true;
		}else{
			return false;
		}
	}

	public function get_all_temporary_vendors()
	{
		$query = $this->db->get('vendortemp');
		return $query;
	}

	public function add_vendor_temp($vendorTempdata)
	{
		$this->db->insert('vendortemp', $vendorTempdata);
		// $this->db->insert('vendorTemp',);
		return 1;
	}


	public function get_all_vendors()
	{
		$query = $this->db->get('vendor');
		return $query;
	}

	public function add_vendor($userdata, $vendordata)
	{
		$this->db->insert('user', $userdata);
		$this->db->insert('vendor', $vendordata);
		return 1;
	}

	public function delete_temp_vendor($tempId)
	{
		$this->db->where('tempId', $tempId);
		$this->db->delete('vendortemp');
	}

	// public function acceptVendorModel($tempId){
	// 	 $query= $this->db->get_where('vendortemp', array('tempId'=$tempId));
	// }

	public function get_last_venId()
	{
		$this->db->select('userId');
		$this->db->from('vendor');
		$this->db->order_by('createdAt', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		// SELECT * FROM `vendor` order by created_at desc LIMIT 1
		$ret = $query->row();
		return $ret->userId;
	}

	public function get_temp_vendor($tempId)
	{
		// $q = $this->db->select('*')->from('vendortemp')->where('tempId',$tempId)->get();
		// return $q->result();

		$query = $this->db->get_where('vendortemp', array('tempId' => $tempId));
		return $query->row();
	}
}