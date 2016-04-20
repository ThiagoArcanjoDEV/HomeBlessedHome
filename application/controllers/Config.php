<?php
class Config extends CI_Controller
{
	public $data;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('config_model');
		
		$this->data = $this->config_model->get_config();
	}

	public function index()
	{
		if(empty($this->data))
		{
				show_404();
		}
		
		$this->load->view('config/index', $this->data);
	}
}
?>
