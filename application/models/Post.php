<?php
/**
**/

class PostModel extends BaseModel
{
	private $_table='ad_router';
	
	public function show(){
		$list=$this->select($this->_table,'*');
		return $list;
	}	
	
	public function debug(){
		return "debug mode";
		
	}
}
