<?php 
    class annualModel extends CI_Model{
 
        function cattles($year,$month){ 
            $query = $this->db->get_where('cattlerecords', array('year' =>$year,'month'=> $month));
            return $query->result();
        }
                
        function poultry($year,$month){  
            $query = $this->db->get_where('poultryrecords', array('year' =>$year,'month'=> $month));
            return $query->result();
        }
                
        function piggery($year,$month){  
            $query = $this->db->get_where('piggeryrecords', array('year' =>$year,'month'=> $month));
            return $query->result();
        }
                
        function goat($year,$month){  
            $query = $this->db->get_where('goatrecords', array('year' =>$year,'month'=> $month));
            return $query->result();
        }     
        
        function breed($year,$month){  
            $query = $this->db->get_where('breedingrecords', array('year' =>$year,'month'=> $month));
            return $query->result();
        }

    }
?>