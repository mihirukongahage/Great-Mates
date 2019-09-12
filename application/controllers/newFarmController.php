<?php 
 
    class  newFarmController extends CI_Controller {  
        
        public function __construct(){
            parent::__construct();  
            $this->load->database(); 
            $this->load->model('farmModel');  
        }


        public function insert(){

            //creating stock type 
            $stock = "";
            if($this->input->post("cattle")=="on"){
                    $stock = $stock."cattle";
            }

            if($this->input->post("poultry")=="on"){
                if($stock==""){
                    $stock = $stock."poultry";
                }else{
                    $stock = $stock." , poultry";
                } 
            }

            if($this->input->post("piggery")=="on"){
               if($stock==""){
                    $stock = $stock."piggery";
                }else{
                    $stock = $stock." , piggery";
                } 
            }
            if($this->input->post("goat")=="on"){
                if($stock==""){
                    $stock = $stock."goat";
                }else{
                    $stock = $stock." , goat";
                } 
            } 
               

            $data = array(    
                'regNo'         => $this->input->post('form_reg_no'),
                'Phone'         => $this->input->post('contact_no'),
                'Address'       => $this->input->post('address'), 
                'stockType'     => $stock ,
                'Name'          => $this->input->post('owner_name'), 
                );   
                $this->farmModel->insert($data);       
        }
    }
?>

 