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
            'avatar' => $this->input->post('filename')
        );
        return $this->db->insert('members', $data);
    }
    public function logOn()
    {
        $this->load->helper('url');
        $email =$this->input->post('emailLog');
        $key =$this->input->post('pwd');

        $this -> db -> select('username, password');
        $this -> db -> from('members');
        $this -> db -> where('email', $email);
        $this -> db -> where('password', $key);
        $this -> db -> limit(1);
        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}