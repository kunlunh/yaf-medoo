<?php

use Yaf\Controller_Abstract;

class AdminController extends Controller_Abstract {
   public function indexAction() {
       $this->getView();
   }
   
   public function addpostAction() {
       $this->getView();
   }

   public function postlistAction() {
		Yaf\Dispatcher::getInstance()->disableView();
		
		$url = 'http://yaf.lan/admin/postlist';
		
		$pageno = $this->getRequest()->getQuery('page',1);
        $post = new PostModel();
		$count = $post->countall();
		$offset = 3;
		$pageview = page($url,$pageno,$count,$offset);
	
		$headcount = ($pageno-1)*$offset;
		
		$tailcount = ($pageno)*$offset;
		
		$cnd['LIMIT'] = array($headcount,$offset);

		print_r($post->show($cnd));
		
		echo('</br>');
		echo($pageview);
		echo('</br>');
		echo($post->last());
		
   }
   
   public function doAddpostAction() {
	   $data['Title'] = $this->getRequest()->getPost("title");
	   $data['Content'] = $this->getRequest()->getPost("content");
	   $data['Updatetime'] = time();
	   //$post = new PostModel();
	   print_r($data);
	   die;
	   
   }

}
