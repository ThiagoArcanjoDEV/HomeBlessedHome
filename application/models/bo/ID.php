<?php
/**
* class ID
* 
* Classe com o metodo comum a todas as demais classes, getID() and setID().
* 
* @author 	Thiago Arcanjo
* 
* @package		Models
* @subpackage	bo
* @access		public
*/
class ID{
	/**
	* `id` INT(1) NOT NULL AUTO_INCREMENT ,
	* @access protected
	* @var integer
	*/
	public $id;
	
	/**
	* @param integer $id
	* @return none
	*/
	public function setID($id){
		$this->id = (int)$id;
	}
	/**
	* @param none
	* @return integer
	*/
	public function getID(){
		return $this->id;
	}
}
?>
