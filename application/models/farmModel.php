  
<?php 
    class farmModel extends CI_Model{
        public function insert($data){
					echo 'Farm model..';
            $this->load->helper('url');
            $this->db->insert('farms',$data);
            redirect("/main/enter");
        }
    }
?>
