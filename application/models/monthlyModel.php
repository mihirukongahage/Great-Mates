<?php 
    class monthlyModel extends CI_Model{

 //---------------------Insert---------------------------
        public function cattleInsert($data){
            $this->load->helper('url');
            $this->db->insert('cattlerecords',$data); 
            
            $result['message']  = "succsess";
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('Records/cattle_records',$result); 
   
        }

        public function poultryInsert($data){
            $this->load->helper('url');
            $this->db->insert('poultryrecords',$data); 
            $result['message']  = "succsess";
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('Records/poultry_records',$result); 
        }

        public function piggeryInsert($data){
            $this->load->helper('url');
            $this->db->insert('piggeryrecords',$data);
            $result['message']  = "succsess";
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('Records/piggery_records',$result); 
        }
        
        public function goatInsert($data){
            $this->load->helper('url');
            $this->db->insert('goatrecords',$data);
            $result['message']  = "succsess";
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('Records/goat_records',$result);  
        }
        
//--------------------Read---------------------------------
        
        function cattlesRead($month,$year){ 
            $query = $this->db->get_where('cattlerecords', array('month' => $month , 'year' => $year));
            return $query->result();
        }
                
        function poultryRead($month,$year){ 
            $query = $this->db->get_where('poultryrecords', array('month' => $month , 'year' => $year));
            return $query->result();
        }
                
        function piggeryRead($month,$year){ 
            $query = $this->db->get_where('piggeryrecords', array('month' => $month , 'year' => $year));
            return $query->result();
        }
                
        function goatRead($month,$year){ 
            $query = $this->db->get_where('goatrecords', array('month' => $month , 'year' => $year));
            return $query->result();
        }

    }
?>