<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 22/11/2015
 * Time: 10:28
 */


// application/controller/ajax.php

class Chatter extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Chatter';
        $data['user']= 'TODO username';
        $this->load->view('templates/header',$data);
        $this->load->view('chatter/index');
        $this->load->view('templates/footer');
    }
    public function push_event()
    {
        $data['title'] = 'Chatter';
        $this->load->view('push-event');

    }


}
