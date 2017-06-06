<?php
use Yaf\Controller_Abstract;
class DebugController extends Controller_Abstract {
   public function indexAction() {
       Yaf\Dispatcher::getInstance()->disableView();
	   
	   var_dump('debug mode');
   }
   
   public function showconfigAction() {
       Yaf\Dispatcher::getInstance()->disableView();
	   $data = Yaf\Registry::get('config')->database->toarray();
	   var_dump(Yaf\Registry::get('config'));
   }
   
   public function testjsonAction() {
       Yaf\Dispatcher::getInstance()->disableView();
	   $data = array();
	   $data['code'] = 1;
	   $data['msg'] = "已经收到";
	   jsonify($data);
   }
   
   public function infoAction() {
		Yaf\Dispatcher::getInstance()->disableView();
		
        $model = new PostModel();
		
		print_r($model->info());
		//echo 123;
   }

}
