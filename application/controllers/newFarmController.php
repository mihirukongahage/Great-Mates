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



            //creating stock type 
            $cattle = 0;
            $poultry  = 0;
            $piggery  = 0;
            $goat     = 0;
            
            $farm =0;
            if($this->input->post("cattle")=="on"){
                 $cattle = 1;
                 $farm++;
            }
            if($this->input->post("poultry")=="on"){
                $poultry  = 1;
                $farm++;
            }
            if($this->input->post("piggery")=="on"){
                $piggery  = 1;
                $farm++;
            }
            if($this->input->post("goat")=="on"){
                $goat  = 1;
                $farm++;
            }  
 

            if(empty($this->input->post('form_reg_no'))|| empty(($this->input->post('contact_no'))) || empty(($this->input->post('owner_name'))) || empty($this->input->post('address1')) || empty($this->input->post('address2')) || ($farm==0)) {   
                $result['message']  = "error";
                $p["username"] = $this->session->userdata('username');
                $this->load->view('navbar',$p);
                $this->load->view('new_farm',$result); 

            }else{
               
               $data = array(    
                'regNo'         => $this->input->post('form_reg_no'),
                'Phone'         => $this->input->post('contact_no'),
                'Address'       => $this->input->post('address1')." ".$this->input->post('address2'), 
                'cattle'        => $cattle ,
                'poultry'       => $poultry,
                'piggery'       => $piggery,
                'goat'          => $goat   ,
                'Name'          => $this->input->post('owner_name'), 
                'month' => date("F")
                );   
                    $this->farmModel->insert($data);  
                }
                 
        }} 
?>
