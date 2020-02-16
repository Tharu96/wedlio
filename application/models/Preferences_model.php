<?php
class preferences_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function check(){
		$query = null; //emptying in case 

		$id   =$this->session->userdata('id');
		$query = $this->db->get_where('categoriesselected', array(//making selection
            'userId' => $id
		));
		
		$count = $query->num_rows();

		if ($count === 0) {
            $data = array(

				'userId' => $id,
				'photography' => 0,
				'reception' =>0,
				'florist'=> 0,
				'djandband'=> 0		
			);
            $this->db->insert('categoriesselected', $data);
        }
	}

	public function add_photopreference($photopref)
	{
		$userId = $this->session->userdata('id');
		$this->db->insert('prefphotography', $photopref);
		$pref = array(
			
		);
		$data = array('photography'=> 1);
		$this->db->where('userId',$userId);
		$this->db->update('categoriesselected',$data);		
		return 1;
	}

	public function add_receptionpreference($receptionpref)
	{
		$this->db->insert('prefreception', $receptionpref);
		$userId = $this->session->userdata('id');
		$data = array('reception'=> 1);
		$this->db->where('userId',$userId);
		$this->db->update('categoriesselected',$data);
		return 1;
	}

	public function add_floristpreference($floristpref)
	{
		$this->db->insert('prefflorist', $floristpref);
		$userId = $this->session->userdata('id');
		$data = array('florist'=> 1);
		$this->db->where('userId',$userId);
		$this->db->update('categoriesselected',$data);
		return 1;
	}

	public function add_djandbandpreference($djandbandpref)
	{
		$this->db->insert('prefdjandband', $djandbandpref);
		$userId = $this->session->userdata('id');
		$data = array('djandbands'=> 1);
		$this->db->where('userId',$userId);
		$this->db->update('categoriesselected',$data);
		return 1;
	}
	
	public function photofilter($price){
		$this->db->select('*');
		$this->db->from('photopackages');
		$this->db->where('price <=', $price);
		$this->db->order_by('price','DESC');
		$this->db->limit(3); 
		$query=$this->db->get();
		$ret = $query->result_array();
		return !empty($ret)?$ret:false;
		
	}

	public function receptionfilter($price, $capacity){
		$this->db->select('*');
		$this->db->from('receptionpackages');
		$this->db->where('price <=', $price);
		$this->db->where('capacity<=', $capacity);
		$this->db->order_by('price','DESC');
		$this->db->limit(3);
		$query=$this->db->get();
		$ret = $query->result_array();
		return !empty($ret)?$ret:false;
	}

	public function floristfilter($price){
		$this->db->select('*');
		$this->db->from('floristpackages');
		$this->db->where('price <= ', $price);
		$this->db->order_by('price','DESC');
		$this->db->limit(3);
		$query=$this->db->get();
		$ret = $query->result_array();
		return !empty($ret)?$ret:false;
	}

	public function djandbandsfilter($price, $hours){
		$this->db->select('*');
		$this->db->from('receptionpackages');
		$this->db->where('price <=', $price);
		$this->db->where('hours <=', $hours);
		$this->db->order_by('price','DESC');
		$this->db->limit(3);
		$query=$this->db->get();
		$ret = $query->result_array();
		return !empty($ret)?$ret:false;
	}
}
