<?php 
    class monthlyModel extends CI_Model{

 //---------------------Insert---------------------------
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