<?php
class Post extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
	}
	
	public function index()
	{
		$data['post'] = $this->post_model->get_post();
		
        $this->load->view('post/index', $data);
	}
}
?>
