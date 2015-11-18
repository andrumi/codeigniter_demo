<?php

class Upload_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    public function file_view(){
        $this->load->view('news/file_view', array('error' => ' ' ));
    }

    public function do_upload(){
        $config = array(
            'upload_path' => base_url("images/"),
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "2000",
            'max_width' => "2000"
        );
        $this->load->library('upload', $config);

        if($this->upload->do_upload())
        {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('news/upload_successNew',$data);
        }
        else
        {
            $error = array('error' => $this->upload->display_errors());
            print_r( "TOOT".$this->upload->data());
            $this->load->view('news/file_view', $error);
        }
    }
}
?>