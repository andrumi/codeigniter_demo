<?php

// application/controller/ajax.php

class Ajax extends CI_Controller 
{  
    public function __construct()
        {
                parent::__construct();
                $this->load->model('ajax_model');

        }
   public function getdata($param = '')
   {
      // Get data from db
      //$data['ajaxdata'] = "Search result for $param";
      // Get data from db   $data['news'] = $this->Ajax_model->get_search($param);
      $data['ajaxdata'] = $this->ajax_model->get_search($param);
      
      print("Alix:");
      print_r($data['ajaxdata']);
  
      // Pass data to view
      $this->load->view('ajax/index', $data);
   }
}

