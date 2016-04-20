<?php
class Config_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
		$this->load->model('bo/BD_Config');
	}
	
	public function get_config()
	{
		$query = $this->db->get('config');
		$data = $query->result_array();
		
		$Config = new BD_Config($data[0]);
		
		return $Config;
	}
}
?>
