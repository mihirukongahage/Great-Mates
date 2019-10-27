<?php class breedingModel extends CI_Model{

//---------------------Insert---------------------------
       public function insert($data){
           $this->load->helper('url');
           $this->db->insert('breedingrecords',$data);
           redirect("/main/enter");
       }


//--------------------Read---------------------------------
       
       function Monthlyread($month,$year){ 
           $query = $this->db->get_where('breedingrecords', array('month' => $month , 'year' =>$year));
           return $query->result();
       }
    }
?>