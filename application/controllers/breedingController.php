<?php 
 
 
defined('BASEPATH') OR exit('No direct script access allowed');

class breedingController extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    
    $this->load->database();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->model('breedingModel');  
    
    }
 
//------------------------------------------------------------------------------------------------------------------------        
        //Goat
        public function write(){ 
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
                    'code'         => $this->input->post('code'),
                    'year'       => $this->input->post('year'), 
                    'month'       => $this->input->post('month'), 
                    'cattle'   => $cattle ,
                    'poultry'  => $poultry,
                    'piggery'  => $piggery,
                    'goat'     => $goat   , 
                    );   
                    //print_r($data);
                    $this->breedingModel->insert($data);       
            }


        public function read(){ 
            
            if(($this->input->post('month')=='null')){
                $month = "January";
            }else{
                $month =  $this->input->post('month');
            } 

            $result['data']=$this->breedingModel->Monthlyread($month);
            $result['month']=$month;   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('MonthlyReports/monthly_report_breeding',$result); 
        } 
//------------------------------------------------------------------------------------------------------------------------     





        public function index(){
            echo "This is index of breedingController";
        }
    }
?>

    