<?php class locationModel extends CI_Model{


//--------------------Read---------------------------------
       
       function getLocation(){ 
           //$this->load->database();
           $query = $this->db->get('location');
           return $query->result();
       }
    }
?>