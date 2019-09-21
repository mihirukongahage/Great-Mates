<?php 
    class monthlyModel extends CI_Model{

 //---------------------Insert---------------------------
        public function cattleInsert($data){
            $this->load->helper('url');
            $this->db->insert('cattlerecords',$data);
            redirect("/main/dashboard");
        }

        public function poultryInsert($data){
            $this->load->helper('url');
            $this->db->insert('poultryrecords',$data);
            redirect("/main/dashboard");
        }

        public function piggeryInsert($data){
            $this->load->helper('url');
            $this->db->insert('piggeryrecords',$data);
            redirect("/main/dashboard");
        }
        
        public function goatInsert($data){
            $this->load->helper('url');
            $this->db->insert('goatrecords',$data);
            redirect("/main/dashboard");
        }
        
//--------------------Read---------------------------------
        
        function cattlesRead($month){ 
            $query = $this->db->get_where('cattlerecords', array('month' => $month , 'year' =>date("Y")));
            return $query->result();
        }
                
        function poultryRead($month){ 
            $query = $this->db->get_where('poultryrecords', array('month' => $month , 'year' =>date("Y")));
            return $query->result();
        }
                
        function piggeryRead($month){ 
            $query = $this->db->get_where('piggeryrecords', array('month' => $month , 'year' =>date("Y")));
            return $query->result();
        }
                
        function goatRead($month){ 
            $query = $this->db->get_where('goatrecords', array('month' => $month , 'year' =>date("Y")));
            return $query->result();
        }

    }
?>