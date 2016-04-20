<?php
require_once('ID.php');

class BD_User extends ID
{
	public $name;
	public $login;
	public $password;
	
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
	
	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setLogin($login)
	{
		$this->login = $login;
	}
	
	public function getLogin()
	{
		return $this->login;
	}
	
	public function setPassword($password)
	{
		$this->password = $password;
	}
	
	public function getPassword()
	{
		return $this->password;
	}
}
