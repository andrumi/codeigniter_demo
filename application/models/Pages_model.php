<?php
class Pages_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }


    public function register()
    {
        $this->load->helper('url');

        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'town' => $this->input->post('town'),
            'password' => $this->input->post('password'),
            'avatar' => $this->input->post('avatar')

        );

        return $this->db->insert('members', $data);
    }

}