<?php

class Form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('Records/cattle_records');
                }
                else
                {
                        $this->load->view('formsuccess');
                }
        }
}