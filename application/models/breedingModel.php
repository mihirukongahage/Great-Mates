<?php class breedingModel extends CI_Model{

//---------------------Insert---------------------------
       public function insert($data){
           $this->load->helper('url');
           $this->db->insert('breedingrecords',$data);
           redirect("/main/enter");
       }


//--------------------Read---------------------------------
       
       function Monthlyread($month){ 
           $query = $this->db->get_where('breedingrecords', array('month' => $month , 'year' =>date("Y")));
           return $query->result();
       }
    }
?>