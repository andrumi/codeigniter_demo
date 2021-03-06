<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');                
        }
       
        public function index()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');
                $data['news'] = $this->news_model->get_news();
				        $data['title'] = 'News archive';

                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('text', 'Text', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                    $this->load->view('templates/header', $data);
                    $this->load->view('news/index', $data);
                    $this->load->view('templates/footer');

                }
                else
                {
                    $this->news_model->set_news();
                    $this->load->view('templates/header', $data);
                    redirect($this->uri->uri_string());
                    $this->load->view('templates/footer');
                }
        }


        public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);

                 if (empty($data['news_item']))
				{
						//show_404();
						/* just assuming this because there is no data*/
						echo "No news is good news";
				}

				$data['title'] = $data['news_item']['title'];
		
				$this->load->view('templates/header', $data);
				$this->load->view('news/view', $data);
				$this->load->view('templates/footer');
		}
		public function create()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
		
			$data['title'] = 'Create a news item';
		
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('text', 'Text', 'required');
		
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('news/create');
				$this->load->view('templates/footer');
		
			}
			else
			{
				$this->news_model->set_news();
                $this->load->view('news/success', $data);

			}
		}


		public function register()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title'] = 'Register';

			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('pwd', 'Pwd', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('news/register');
				$this->load->view('templates/footer');

			}
			else
			{
				$this->news_model->set_news();
				$this->load->view('news/success');
			}
		}
}