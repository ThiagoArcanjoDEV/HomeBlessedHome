<?php
class User_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
		$this->load->model('bo/BD_User');
		
		// HELPERS
		$this->load->helper('load_controller');
		load_controller('User');
	}
	
	public function get_user($data)
	{
		$query = $this->db->get_where('user',array('login' => $data['login']));
		$data = $query->row_array();
		
		$User = new BD_User($data);
		
		return $User;
	}
}
?>
