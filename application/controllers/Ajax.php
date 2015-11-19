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
      $data['ajaxdata1'] = "Search result for $param";
      $data['ajaxdata'] = $this->ajax_model->get_search($param);

      $this->load->view('ajax/index', $data);
   }
    public function getDatedata($param = '')
    {
        $data['ajaxdata1'] = "Search result for $param";
        $data['ajaxdata'] = $this->ajax_model->get_searchDate($param);

        $this->load->view('ajax/index', $data);
    }
}

