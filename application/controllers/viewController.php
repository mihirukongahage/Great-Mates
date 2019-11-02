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
            if(empty($this->input->post('month'))){
                $month = "January";
            }else{
                $month =  $this->input->post('month');
            } 


            if(empty($this->input->post('category'))){
                $category = "cattle";
            }else{
                $category =  $this->input->post('category');
            } 

            
            $result['data']  =$this->viewModel->readFarms($month, $category);
            $result['month']  = $month ;
            $result['type']  =  $category ;
              
                
                
 
 
            //$p["username"] = $this->session->userdata('username');
            //$this->load->view('new_farm',$result); 
            $p["username"] = $this->session->userdata('username');
          
            $this->load->view('navbar',$p); 
            $this->load->view('view',$result);   
        } 
    

    public function index(){
        echo "Index of view controller ";
    }
}
?>
