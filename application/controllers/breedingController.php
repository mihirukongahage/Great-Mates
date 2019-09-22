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
                $goat     = 0;
                
                if($this->input->post("cattle")=="on"){
                    $cattle = 1;
                }

                if($this->input->post("goat")=="on"){
                    $goat  = 1;
                } 
                
                $has_stock = $cattle + $goat;
                
                if(empty($this->input->post('farm_reg_no'))|| empty($this->input->post('code'))  || (!($has_stock))|| empty($this->input->post('year')) || empty($this->input->post('month'))) {   
                   redirect(base_url('index.php/main/breeding_records')); 
                }
 
                $data = array(    
                    'regNo'         => $this->input->post('farm_reg_no'),
                    'code'         => $this->input->post('code'),
                    'year'        => $this->input->post('year'), 
                    'month'       => $this->input->post('month'), 
                    'cattle'   => $cattle , 
                    'goat'     => $goat   , 
                    );    

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

    