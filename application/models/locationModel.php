<?php class locationModel extends CI_Model{
 
       function getLocation(){ 
           $this->load->helper('url');  
           $query = $this->db->get_where('location');
           return $query->result();
       } 
       
    }
?>
 