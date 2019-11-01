  
<?php 
    class farmModel extends CI_Model{
        public function insert($data){
            $this->load->helper('url');
            $this->db->insert('farms',$data);  
            $result['message']  = "succsess";
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('new_farm',$result);
        }
    }
?>