<?php 
 
 
defined('BASEPATH') OR exit('No direct script access allowed');

class monthlyRecordController extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    
    $this->load->database();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->model('monthlyModel');  
    
    }
 

        //cattle 
        public function insertCattle(){


            if(empty($this->input->post('farm_reg_no'))|| empty(($this->input->post('no_of_animals'))) || empty($this->input->post('amount_of_milk')) || empty($this->input->post('meat_production')) || empty($this->input->post('expences')) || empty($this->input->post('income')) || empty($this->input->post('year')) || empty($this->input->post('month'))) {   
                $result['message']  = "error";
                $p["username"] = $this->session->userdata('username');
                $this->load->view('navbar',$p);
                $this->load->view('Records/cattle_records',$result); 
            }else{
 
            $data = array(     
                'regNo'             =>$this->input->post('farm_reg_no'),
                'no_of_animals'     =>$this->input->post('no_of_animals'),
                'amount_of_milk'    =>$this->input->post('amount_of_milk'),
                'meat_production'   =>$this->input->post('meat_production'), 
                'expences'          =>$this->input->post('expences'),
                'income'            =>$this->input->post('income'),
                'year'              =>$this->input->post('year'), 
                'month'             =>$this->input->post('month'),  
            );   
            
            $this->monthlyModel->cattleInsert($data);     
            }    
        }

        public function readCattles(){ 
  
            if(($this->input->post('month')==='null')){
                $month = "January";
                $year = 2019;
            }else{
                $month =  $this->input->post('month');
                $year =  $this->input->post('year');
            } 

            $result['data']=$this->monthlyModel->cattlesRead($month,$year);     
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('MonthlyReports/monthly_report_cattle',$result); 
        } 
//------------------------------------------------------------------------------------------------------------------------
        //Poultry
        public function insertPoultry(){

        
            if(empty($this->input->post('farm_reg_no'))|| empty(($this->input->post('no_of_animals'))) || empty($this->input->post('amount_of_eggs')) || empty($this->input->post('meat_production')) || empty($this->input->post('expences')) || empty($this->input->post('income')) || empty($this->input->post('year')) || empty($this->input->post('month'))) {   
                $result['message']  = "error";
                $p["username"] = $this->session->userdata('username');
                $this->load->view('navbar',$p);
                $this->load->view('Records/poultry_records',$result); 
            }else{

            $data = array(     
                'regNo'             =>$this->input->post('farm_reg_no'),
                'no_of_animals'     =>$this->input->post('no_of_animals'),
                'amount_of_eggs'    =>$this->input->post('amount_of_eggs'),
                'meat_production'   =>$this->input->post('meat_production'), 
                'expences'          =>$this->input->post('expences'),
                'income'            =>$this->input->post('income'),
                'year'              =>$this->input->post('year'), 
                'month'              =>$this->input->post('month'), 
            );   
            $this->monthlyModel->poultryInsert($data);        
        }
    }

        public function readPoultry(){ 
            
            
            if(($this->input->post('month')==='null')){
                $month = "January";
                $year = 2019;
            }else{
                $month =  $this->input->post('month');
                $year =  $this->input->post('year');
            } 

            $result['data']=$this->monthlyModel->poultryRead($month,$year);     
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('MonthlyReports/monthly_report_poultry',$result); 
        } 
//------------------------------------------------------------------------------------------------------------------------
        //Piggery
        public function insertPiggery(){
            
            if(empty($this->input->post('farm_reg_no'))|| empty(($this->input->post('no_of_animals'))) || empty($this->input->post('meat_production')) || empty($this->input->post('expences')) || empty($this->input->post('income')) || empty($this->input->post('year')) || empty($this->input->post('month'))) {   
                $result['message']  = "error";
                $p["username"] = $this->session->userdata('username');
                $this->load->view('navbar',$p);
                $this->load->view('Records/piggery_records',$result); 
            }else{
             
            
            $data = array(     
                'regNo'             =>$this->input->post('farm_reg_no'),
                'no_of_animals'     =>$this->input->post('no_of_animals'), 
                'meat_production'   =>$this->input->post('meat_production'), 
                'expences'          =>$this->input->post('expences'),
                'income'            =>$this->input->post('income'),
                'year'              =>$this->input->post('year'), 
                'month'              =>$this->input->post('month'), 
            );   
            $this->monthlyModel->piggeryInsert($data);  
        }      
        }

        public function readPiggery(){ 
            
            if(($this->input->post('month')==='null')){
                $month = "January";
                $year = 2019;
            }else{
                $month =  $this->input->post('month');
                $year =  $this->input->post('year');
            } 

            $result['data']=$this->monthlyModel->piggeryRead($month,$year);   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('MonthlyReports/monthly_report_piggery',$result); 
        } 
//------------------------------------------------------------------------------------------------------------------------        
        //Goat
        public function insertGoat(){
              
            if(empty($this->input->post('farm_reg_no'))|| empty(($this->input->post('no_of_animals'))) || empty($this->input->post('amount_of_milk')) || empty($this->input->post('meat_production')) || empty($this->input->post('expences')) || empty($this->input->post('income')) || empty($this->input->post('year')) || empty($this->input->post('month'))) {   
                $result['message']  = "error";
                $p["username"] = $this->session->userdata('username');
                $this->load->view('navbar',$p);
                $this->load->view('Records/goat_records',$result); 
            }else{
            
            $data = array(     
                'regNo'             =>$this->input->post('farm_reg_no'),
                'no_of_animals'     =>$this->input->post('no_of_animals'), 
                'meat_production'   =>$this->input->post('meat_production'), 
                'expences'          =>$this->input->post('expences'),
                'income'            =>$this->input->post('income'),
                'year'              =>$this->input->post('year'), 
                'month'             =>$this->input->post('month'), 
                'amount_of_milk'             =>$this->input->post('amount_of_milk'),
            );  
            $this->monthlyModel->goatInsert($data);        
        }
    }

        public function readGoat(){ 
            
            if(($this->input->post('month')==='null')){
                $month = "January";
                $year = 2019;
            }else{
                $month =  $this->input->post('month');
                $year =  $this->input->post('year');
            } 

            $result['data']=$this->monthlyModel->goatRead($month,$year);   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('MonthlyReports/monthly_report_goat',$result); 
        } 
//------------------------------------------------------------------------------------------------------------------------     
     
         
        public function readFarms(){
            
            
            if(($this->input->post('month')=='null')){
                $month = "January";
            }else{
                $month =  $this->input->post('month');
            } 

            $result['registered']=$this->monthlyModel->goatRead($month);  
            $result['submitted']=$this->monthlyModel->goatRead($month);   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('MonthlyReports/monthly_report_goat',$result); 

        }




        public function index(){
            echo "This is index of monthlyRecordController";
        }
    }
?>

    