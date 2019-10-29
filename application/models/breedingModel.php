<?php class breedingModel extends CI_Model{

//---------------------Insert---------------------------
       public function insert($data){
           $this->load->helper('url');
           $this->db->insert('breedingrecords',$data); 
           $result['message']  = "succsess";
           $p["username"] = $this->session->userdata('username');
           $this->load->view('navbar',$p);
           $this->load->view('breeding_records',$result);
           
       }


//--------------------Read---------------------------------
       
       function Monthlyread($month,$year){ 
           $query = $this->db->get_where('breedingrecords', array('month' => $month , 'year' =>$year));
           return $query->result();
       }
    }
?>