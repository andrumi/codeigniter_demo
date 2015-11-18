<?php

// application/controller/search.php

class Search extends CI_Controller 
{
   public function form()
   {
      $data['title'] = 'Ajax search';
  
      $this->load->view('templates/header', $data);
      $this->load->view('search/form');
      $this->load->view('templates/footer');
   }
}