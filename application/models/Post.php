<?php
/**
**/

class PostModel extends Medoo
{
	private $_table='ad_post';
	
	public function show($condition = ''){
		$list=$this->select($this->_table,'*',$condition);
		return $list;
	}
	
	public function showall(){
		$list=$this->select($this->_table,'*');
		return $list;
	}
	
	public function countall(){
		$countno = $this->count($this->_table,'*');
		return $countno;
	}
	
	public function debug(){
		return "debug mode";
		
	}
}
