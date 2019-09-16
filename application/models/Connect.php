<?php
class Connect extends CI_Model{

    /*

    Authenticate user login

    */
    function login_auth($username, $password)
    {
        $this->load->database();
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        // Get from user_log table
        $query= $this->db->get('users_log');
        $this->db->query($query);

        if($query->num_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function insert($data){
            $this->load->helper('url');
            $this->db->insert('users_log',$data);
            redirect("/main/login");
        }

}
?>