<?php
require_once('ID.php');

class BD_Config extends ID
{
	public $title;
	public $description;
	public $default_exp_days;
	
	public function __construct($array = null)
	{
		if(!empty($array))
		{
			foreach($array as $key => $value)
			{
				$this->$key = $value;
			}
		}
	}
	
	public function setTitle($title)
	{
		$this->title = $title;
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function setDescription($description)
	{
		$this->description = $description;
	}
	
	public function getDescription()
	{
		return $this->description;
	}
	
	public function setDefaultExpDate($default_exp_date)
	{
		$this->default_exp_date = $default_exp_date;
	}
	
	public function getDefaultExpDate()
	{
		return $this->default_exp_date;
	}
}
