<?php 
 
 
defined('BASEPATH') OR exit('No direct script access allowed');

class annualController extends CI_Controller {

    public function __construct() {
    parent::__construct();
    $this->load->database();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->model('annualModel');  
    }
 
//----------------------------------------------------------------------------------------------------------------------
        //cattle 
        public function cattle(){ 
            $result['data']=$this->annualModel->cattles("2019","January");   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('AnnualReports/annual_report_cattle',$result); 
        } 

        public function readCattles(){ 
            $year = $this->input->post('year');
            $month = $this->input->post('month');
            $result['data']=$this->annualModel->cattles( $year, $month);   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('AnnualReports/annual_report_cattle',$result);  
        }
//------------------------------------------------------------------------------------------------------------------------
        //Poultry
        public function poultry(){ 
            $result['data']=$this->annualModel->poultry("2019","January");   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('AnnualReports/annual_report_poultry',$result); 
        }
        
        public function readPoultry(){ 
            $year = $this->input->post('year');
            $month = $this->input->post('month');
            $result['data']=$this->annualModel->poultry( $year, $month);   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('AnnualReports/annual_report_poultry',$result); 
        }
//------------------------------------------------------------------------------------------------------------------------
        //Piggery
        public function piggery(){ 
            $result['data']=$this->annualModel->piggery("2019","January");   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('AnnualReports/annual_report_piggery',$result); 
        }
        
        public function readPiggery(){ 
            $year = $this->input->post('year');
            $month = $this->input->post('month');
            $result['data']=$this->annualModel->piggery( $year, $month);   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('AnnualReports/annual_report_piggery',$result); 
        } 
//------------------------------------------------------------------------------------------------------------------------        
        //Goat
        public function goat(){ 
            $result['data']=$this->annualModel->goat("2019","January");   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('AnnualReports/annual_report_goat',$result); 
        }
        
        public function readGoat(){ 
            $year = $this->input->post('year');
            $month = $this->input->post('month');
            $result['data']=$this->annualModel->goat( $year, '###');   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('AnnualReports/annual_report_goat',$result);   
        } 
//------------------------------------------------------------------------------------------------------------------------    
        //Breading
        public function breeding(){ 
            $result['data']=$this->annualModel->breed("2019","January");   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('AnnualReports/annual_report_breeding',$result); 
        } 
        public function readBreeding(){ 
            $year = $this->input->post('year');
            $month = $this->input->post('month');
            $result['data']=$this->annualModel->breed( $year, $month);   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('AnnualReports/annual_report_breeding',$result); 
        } 
//------------------------------------------------------------------------------------------------------------------------     

        public function index(){
            echo "This is index of AnnualController";
        }

        
    }
?>

    