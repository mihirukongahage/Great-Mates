<?php 
    class viewModel extends CI_Model{


       function registeredFarmsCattle($month){
            $query = $this->db->get_where('farms', array('month' => $month ,'cattle' => 1));
            return $query->result();

       }

       function registeredFarmsPoultry($month){
            $query = $this->db->get_where('farms', array('month' => $month ,'poultry' => 1));
            return $query->result();

       }

       function registeredFarmsPiggery($month){
            $query = $this->db->get_where('farms', array('month' => $month ,'piggery' =>1 ));
            return $query->result();

       }

       function registeredFarmsGoat($month){
            $query = $this->db->get_where('farms', array('month' => $month ,'goat' => 1 ));
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