<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
    
        parent::__construct();
    
    $this->load->database();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->model('Connect');
    
    }

    public function index(){
        //$this->load->view('login');
    }

    public function login(){
        $this->load->view('login');
    }

    /*
    New Farm
    */
    public function new_farm(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('new_farm');

    }

    /*
    Monthly Records
    */
    public function monthly_records(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('monthly_records');

    }

    /*
    Breeding Records
    */
    public function breeding_records(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('breeding_records');

    }

    /*
    Monthly Reports
    */
    public function monthly_reports(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('monthly_reports');

    }

    /*
    Monthly Records
    */
    public function annual_reports(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('annual_reports');

    }

    /*
    About
    */
    public function about(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('about');

    }

//////////////////  Records ///////////////////////////
    /*
    Cattle Records
    */
    public function cattle_records(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('Records/cattle_records');

    }

    /*
    Poultry Records
    */
    public function poultry_records(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('Records/poultry_records');

        /*
        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('poultry_records');*/

    }

    /*
    Piggery Records
    */
    public function piggery_records(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('Records/piggery_records');

    }

    /*
    Goat Records
    */
    public function goat_records(){
        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('Records/goat_records');

    }

    /////////////////////// Monthly Report /////////////////
/*
    Cattle Report
    */
    public function monthly_report_cattle(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('MonthlyReports/monthly_report_cattle');

    }

    /*
    Poultry Report
    */
    public function monthly_report_poultry(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('MonthlyReports/monthly_report_poultry');

    }

    /*
    Piggery Report
    */
    public function monthly_report_piggery(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('MonthlyReports/monthly_report_piggery');

    }

    /*
    Goat Report
    */
    public function monthly_report_goat(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('MonthlyReports/monthly_report_goat');

    }

    /*
    Breeding Report
    */
    public function monthly_report_breeding(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('MonthlyReports/monthly_report_breeding');

    }

    /////////////////////// Annual Report /////////////////
/*
    Cattle Report
    */
    public function annual_report_cattle(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('AnnualReports/annual_report_cattle');

    }

    /*
    Poultry Report
    */
    public function annual_report_poultry(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('AnnualReports/annual_report_poultry');

    }

    /*
    Piggery Report
    */
    public function annual_report_piggery(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('AnnualReports/annual_report_piggery');

    }

    /*
    Goat Report
    */
    public function annual_report_goat(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('AnnualReports/annual_report_goat');

    }

    /*
    Breeding Report
    */
    public function annual_report_breeding(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('AnnualReports/annual_report_breeding');

    }

    /*
    View
    */
    public function view(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
        $this->load->view('view');

    }



    /*
    Login form validation and authentication 
    */
    public function login_validation(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        // Validate user
        if($this->form_validation->run())
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('connect');
            
            // Authenticate user
            if($this->connect->login_auth($username, $password))
            {
                // If auth user
                $session_data = array(
                    'username' => $username
                );
                $this->session->set_userdata($session_data);
                redirect(base_url(). 'index.php/main/enter');
            }
            else
            {
                // If not auth user
                $this->session->set_flashdata('error', 'Invalid Username and Password');
                redirect(base_url(). 'index.php/main/login');
            }
        }
        else
        {
            // If invalid redirect to login
            $this->login();
        }

    }

    /*

    Initiating the dashboard 

    */
    public function enter(){

        // If session is created with the username
        if($this->session->userdata('username') != '')
        {
            //Navbar 
            $data["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$data);
                
            $this->load->view('dashboard');

        }
        else
        {
            // Session not found
            redirect(base_url(). 'main/login');
        }

    }
    /*

    Logout

    */
    public function logout(){

        $this->session->unset_userdata('username');
        redirect(base_url().'index.php/main/login');

    }

    /*

    Load dashboard when dashboard button is clicked on the navbar

    */
    public function dashboard(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);
       
        $this->load->view('dashboard');

    }


    /*

    Signup form

    */

    public function signup()
    {
        $this->load->view('signup');

    }
    /*

    Signup validation and auth
    
    */
    public function signup_validate()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('office_id', 'OfficeId', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'CPassword', 'required');
        
        if($this->input->post('save'))
        {
            $username = $this->input->post('username');
            $office_id = $this->input->post('office_id');
            $password = $this->input->post('password');
            $isAdmin = 1;
            $this->connect->sign_up($username, $office_id, $password);
        }

        $data = array(    
                    'username'     => $this->input->post('username'),
                    'office_id'     => $this->input->post('office_id'),
                    'password'     => $this->input->post('password'), 
                    );   
        $this->Connect->insert($data);
    }
    
    
 }
?>