<?php
class Post_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_post()
	{
		$query = $this->db->get('post');
		return $query->result_array();
	}
}
?>
