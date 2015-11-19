<?php
class Pages extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('pages_model');

        }

        public function view($page = 'home')
        {
		   
           if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
           {
                // Whoops, we don't have a page for that!
				show_404();
           }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
        }

        public function index()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Register';

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('town', 'Town', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('pages/index');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->pages_model->register();

                $this->load->view('templates/header', $data);
                $this->load->view('pages/index');
                $this->load->view('templates/footer');

            }
        }
}
?>