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

        public function getLastUserId(){
            $this->db->select('userId');
            $this->db->from('customer');
            $this->db->order_by('created_at', 'DESC');
            $this->db->limit(1);
            $query = $this->db->get();
            // SELECT * FROM `user` order by created_at desc LIMIT 1
            $ret = $query->row();
            return $ret->userId;
        }


    }
?>
