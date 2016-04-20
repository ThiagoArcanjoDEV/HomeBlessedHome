<?php
class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		// MODELS
		$this->load->model('config_model');
		$this->load->model('user_model');
	}
	
	public function view ($page = 'home')
	{
		$data = $this->config_model->get_config();
		
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

		$this->load->view('templates/header',$data);
        $this->load->view('pages/menu', $data);
        $this->login();
		$this->load->view('templates/footer');
	}
	
	public function login()
	{
		$this->form_validation->set_rules('login', 'Login', 'required');
		$this->form_validation->set_rules('senha', 'Senha', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('pages/login');
		}
	}
}
?>
