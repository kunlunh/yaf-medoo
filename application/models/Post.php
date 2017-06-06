<?php
/**
**/

class PostModel extends Medoo
{
	private $_table='ad_router';
	
	public function showall(){
		$list=$this->select($this->_table,'*');
		return $list;
	}	
	
	public function debug(){
		return "debug mode";
		
	}
}
