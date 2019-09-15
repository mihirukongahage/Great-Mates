<?php 
    class annualModel extends CI_Model{
 
        function cattles($year){ 
            $query = $this->db->get_where('cattlerecords', array('year' =>date("Y")));
            return $query->result();
        }
                
        function poultry($year){ 
            $query = $this->db->get_where('poultryrecords', array('year' =>date("Y")));
            return $query->result();
        }
                
        function piggery($year){ 
            $query = $this->db->get_where('piggeryrecords', array('year' =>date("Y")));
            return $query->result();
        }
                
        function goat($year){ 
            $query = $this->db->get_where('goatrecords', array('year' =>date("Y")));
            return $query->result();
        }     
        
        function breed($year){ 
            $query = $this->db->get_where('breedingrecords', array('year' =>date("Y")));
            return $query->result();
        }

    }
?>