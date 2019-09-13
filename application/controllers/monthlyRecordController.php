<?php 
 
    class  monthlyRecordController extends CI_Controller {  
        
        public function __construct(){
            parent::__construct();  
            $this->load->database(); 
            $this->load->model('monthlyModel');  
        }

        //cattle 
        public function insertCattle(){
            $data = array(     
                'no_of_animals'     =>$this->input->post('no_of_animals'),
                'amount_of_milk'    =>$this->input->post('amount_of_milk'),
                'meat_production'   =>$this->input->post('meat_production'), 
                'expences'          =>$this->input->post('expences'),
                'income'            =>$this->input->post('income'),
                'year'              =>$this->input->post('year'), 
                'month'              =>$this->input->post('month'), 
            );   
                //print_r($data);
                $this->monthlyModel->cattleInsert($data);        
        }


        //Poultry
        public function insertPoultry(){
            $data = array(     
                'no_of_animals'     =>$this->input->post('no_of_animals'),
                'amount_of_eggs'    =>$this->input->post('amount_of_eggs'),
                'meat_production'   =>$this->input->post('meat_production'), 
                'expences'          =>$this->input->post('expences'),
                'income'            =>$this->input->post('income'),
                'year'              =>$this->input->post('year'), 
                'month'              =>$this->input->post('month'), 
            );   
                //print_r($data);
                $this->monthlyModel->poultryInsert($data);        
        }

        //Piggery
        public function insertPiggery(){
            $data = array(     
                'no_of_animals'     =>$this->input->post('no_of_animals'), 
                'meat_production'   =>$this->input->post('meat_production'), 
                'expences'          =>$this->input->post('expences'),
                'income'            =>$this->input->post('income'),
                'year'              =>$this->input->post('year'), 
                'month'              =>$this->input->post('month'), 
            );   
                //print_r($data);
                $this->monthlyModel->piggeryInsert($data);        
        }
        
        
        public function insertGoat(){
            $data = array(     
                'no_of_animals'     =>$this->input->post('no_of_animals'), 
                'meat_production'   =>$this->input->post('meat_production'), 
                'expences'          =>$this->input->post('expences'),
                'income'            =>$this->input->post('income'),
                'year'              =>$this->input->post('year'), 
                'month'             =>$this->input->post('month'), 
            );   
                //print_r($data);
                $this->monthlyModel->goatInsert($data);        
        }
        

        public function index(){
            echo "This is index";
        }
    }






        /*
            echo $this->input->post('no_of_animals');
            echo $this->input->post('amount_of_milk');
            echo $this->input->post('meat_production'); 
            echo $this->input->post('expences');       
            echo $this->input->post('income');     
            echo $this->input->post('year');
*/
?>

    