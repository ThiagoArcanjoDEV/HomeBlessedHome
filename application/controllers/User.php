<?php
class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function login()
	{		
		$this->form_validation->set_rules('login', 'Login', 'required');
		$this->form_validation->set_rules('senha', 'Senha', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('user/login');
		}
	}
}
?>
