<?php 
 
  

class locationController extends CI_Controller {

    public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->model('locationModel');  
    }
    
  
        public function readLocations(){  
            $result['data']=$this->locationModel->getLocation();     
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('farmLocations',$result); 
        } 

    
        public function index(){
            echo "This is the index of locations";
        }
    }
?>

 