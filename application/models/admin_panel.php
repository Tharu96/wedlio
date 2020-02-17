<?php
    class admin_panel extends CI_Model{

        function __construct(){
			parent::__construct();
			$this->load->database();
        }

        public function get_admin($adminId){
            $this->db->where('userId',$adminId);
            $admin=$this->db->get("admin");
            if($admin)
            {
                return $admin->row(0);
            }else{
                return false;
            }
        }
        public function add_vendor_category($data){
            return $this->db->insert('category',$data);
        }

        public function get_all_vendor_categories(){
            $query=$this->db->get('category');
            if($query-> num_rows()>0){
                return $query->result();
            }

        }

        public function getHeaderImagePath($categoryId){

            $this->db->select('headerImagePath');
            $this->db->from('category');
            $this->db->where('categoryId',$categoryId);
            $row = $this->db->get()->row();
            if (isset($row)) {
                return $row->headerImagePath;
    
            } else {
                return false;
            }	
        }

        public function  load_all_vendors($categoryId){
            $query=$this->db->get_where('vendor',array('categoryId'=>$categoryId));
            if($query-> num_rows()>0){
                return $query->result();
            }
        }
        
        public function get_vendor($vendorId){

            $this->db->where('userId',$vendorId);
            $vendor=$this->db->get("vendor");
            if($vendor)
            {
                return $vendor->row(0);
            }else{
                return false;
            }
           
        }

        public function get_categoryId($vendorId){

            $this->db->select('categoryId');
            $this->db->from('vendor');
            $this->db->where('userId',$vendorId);
            $row = $this->db->get()->row();
            if (isset($row)) {
                return $row->categoryId;
    
            } else {
                return false;
            }	
           
        }

        
        public function get_vendor_name($vendorId){

            $this->db->select('businessName');
            $this->db->from('vendor');
            $this->db->where('userId',$vendorId);
            $row = $this->db->get()->row();
            if (isset($row)) {
                return $row->businessName;
    
            } else {
                return false;
            }	
           
        }

        

        public function get_packages($vendorId,$table_Name){

               $query=$this->db->get_where($table_Name,array('userId'=>$vendorId));
               if($query-> num_rows()>0){
                   return $query->result();
               }
        }
       

    }

        
        
?>