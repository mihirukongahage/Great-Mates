<?php 

    class farmModel extends CI_Model{
        public function insert($data){
            $this->db->insert('farms',$data);
        }
    }

?>