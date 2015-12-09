<?php

/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 30/11/2015
 * Time: 20:03
 */
class Ebay  extends CI_Controller {

//    public function __construct()
//    {
//        parent::__construct();
//        $this->load->model('ajax_model');
//
//    }


 /*   public function index()
    {

        $data['title'] = 'Ebay Search Results';

        $this->load->view('templates/header', $data);
        //$this->load->view('ebay/index', $data); 
        $this->load->view('ebay/index', $data);
        $this->load->view('templates/footer');

    }   */
    public function view($page = 'index')      {

        $data['title'] = 'Ebay Search Results';

        $this->load->view('templates/header', $data);
        $this->load->view('ebay/'.$page, $data);
        $this->load->view('templates/footer');

    }
}