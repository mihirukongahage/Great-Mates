<?php 
 
    class  viewController extends CI_Controller {  
        
        public function __construct(){
            parent::__construct();  
            $this->load->database(); 
            $this->load->model('viewModel'); 
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->library('form_validation'); 
        }



       public function read(){ 
            if(($this->input->post('month')==='null')){
                $month = "January";
            }else{
                $month =  $this->input->post('month');
            } 

            $result['cattle']  =$this->viewModel->registeredFarmsCattle($month);  
            $result['cattle1'] =$this->viewModel->cattlesRead($month);  
            $result['poultry']  =$this->viewModel->registeredFarmsPoultry($month);  
            $result['poultry1'] =$this->viewModel->poultryRead($month); 
            $result['piggery']  =$this->viewModel->registeredFarmsPiggery($month);  
            $result['piggery1'] =$this->viewModel->piggeryRead($month); 
            $result['goat']  =$this->viewModel->registeredFarmsGoat($month);  
            $result['goat1'] =$this->viewModel->goatRead($month);  
 
            //$p["username"] = $this->session->userdata('username');
            //$this->load->view('new_farm',$result); 
            $p["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$p);


            //print_r($result['cattle']) ;
            $this->load->view('view',$result);
        } 
    

    public function index(){
        echo "Index of view controller ";
    }
}
?>
