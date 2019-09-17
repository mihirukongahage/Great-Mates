<?php 
 
    class  newFarmController extends CI_Controller {  
        
        public function __construct(){
            parent::__construct();  
            $this->load->database(); 
            $this->load->helper('url');
            $this->load->model('farmModel');    
            $this->load->database();  
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->model('Connect');
        
        }
        public function insert(){


            if(empty($this->input->post('form_reg_no'))|| empty(($this->input->post('contact_no'))) || empty($this->input->post('address'))) {   
                     redirect(base_url('index.php/main/new_farm')); 
            }



            //creating stock type 
            $cattle = 0;
            $poultry  = 0;
            $piggery  = 0;
            $goat     = 0;
            
            if($this->input->post("cattle")=="on"){
                 $cattle = 1;
            }
            if($this->input->post("poultry")=="on"){
                $poultry  = 1;
            }
            if($this->input->post("piggery")=="on"){
                $piggery  = 1;
            }
            if($this->input->post("goat")=="on"){
                $goat  = 1;
            } 
               
            $data = array(    
                'regNo'         => $this->input->post('form_reg_no'),
                'Phone'         => $this->input->post('contact_no'),
                'Address'       => $this->input->post('address'), 
                'cattle'   => $cattle ,
                'poultry'  => $poultry,
                'piggery'  => $piggery,
                'goat'     => $goat   ,
                'Name'          => $this->input->post('owner_name'), 
                'month' => date("F")
                
                );   
                $this->farmModel->insert($data);       
        }
    }
?>
