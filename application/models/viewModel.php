<?php 
    class viewModel extends CI_Model{


       function readFarms($month,$category){ 
        
        
            if($category=="Cattle"){
                $query = $this->db->get_where('farms', array('month' => $month ,'cattle' => 1));
            }else if($category=="Poultry"){
                $query = $this->db->get_where('farms', array('month' => $month ,'poultry' => 1));
            }else if($category=="Piggery"){
                $query = $this->db->get_where('farms', array('month' => $month ,'piggery' => 1));
            }else if($category=="Goat"){
                $query = $this->db->get_where('farms', array('month' => $month ,'goat' => 1));
            }
            return $query->result();
              
       }
 
  
//--------------------Read registered farms for the month---------------------------------
        
        function cattlesRead($month){ 
            $query = $this->db->get_where('cattlerecords', array('month' => $month));
            return $query->result();
        }
                
        function poultryRead($month){ 
            $query = $this->db->get_where('poultryrecords', array('month' => $month));
            return $query->result();
        }
                
        function piggeryRead($month){ 
            $query = $this->db->get_where('piggeryrecords', array('month' => $month));
            return $query->result();
        }
                
        function goatRead($month){ 
            $query = $this->db->get_where('goatrecords', array('month' => $month));
            return $query->result();
        }

    }
?>