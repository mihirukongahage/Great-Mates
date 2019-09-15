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
            $result['data']=$this->annualModel->cattles(date("Y"));   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('AnnualReports/annual_report_cattle',$result); 
        } 
//------------------------------------------------------------------------------------------------------------------------
        //Poultry
        public function poultry(){ 
            $result['data']=$this->annualModel->poultry(date("Y"));   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('AnnualReports/annual_report_poultry',$result); 
        } 
//------------------------------------------------------------------------------------------------------------------------
        //Piggery
        public function piggery(){ 
            $result['data']=$this->annualModel->piggery(date("Y"));   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('AnnualReports/annual_report_piggery',$result); 
        } 
//------------------------------------------------------------------------------------------------------------------------        
        //Goat
        public function goat(){ 
            $result['data']=$this->annualModel->goat(date("Y"));   
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);
            $this->load->view('AnnualReports/annual_report_goat',$result); 
        } 
//------------------------------------------------------------------------------------------------------------------------    
        //Breading
        public function breeding(){ 
            $result['data']=$this->annualModel->breed(date("Y"));   
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

    