<?php 
    class monthlyModel extends CI_Model{

        public function cattleInsert($data){
            $this->load->helper('url');
            $this->db->insert('cattlerecords',$data);
            redirect("/main/enter");
        }

        public function poultryInsert($data){
            $this->load->helper('url');
            $this->db->insert('poultryrecords',$data);
            redirect("/main/enter");
        }

        public function piggeryInsert($data){
            $this->load->helper('url');
            $this->db->insert('piggeryrecords',$data);
            redirect("/main/enter");
        }
        
        public function goatInsert($data){
            $this->load->helper('url');
            $this->db->insert('goatrecords',$data);
            redirect("/main/enter");
        }
    }
?>