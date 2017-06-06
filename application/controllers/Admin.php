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
		
        $post = new PostModel();
		
		print_r($post->showall());
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
