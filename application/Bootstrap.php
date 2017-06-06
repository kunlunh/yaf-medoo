<?php
use Yaf\Bootstrap_Abstract;

class Bootstrap extends Bootstrap_Abstract{

    public function _initConfig() {
		//把配置保存起来
		$this->arrConfig = Yaf\Application::app()->getConfig();

		Yaf\Registry::set('config', $this->arrConfig);
	}


	//载入方法库
	public function _initLibrary()
	{

		Yaf\Loader::import('Function.php');


	}
    //载入数据库
    public function _initDatabase()
    {
        $db_config['hostname'] = $this->arrConfig->db->hostname;
        $db_config['username'] = $this->arrConfig->db->username;
        $db_config['password'] = $this->arrConfig->db->password;
        $db_config['database'] = $this->arrConfig->db->database;
        $db_config['log']      = $this->arrConfig->db->log;
		//Yaf\Registry::set('db_config', $db_config);
        //Yaf\Registry::set('db', new Db($db_config));
    }

	public function _initPlugin(Yaf\Dispatcher $dispatcher) {
		//注册一个插件
	}

	public function _initRoute(Yaf\Dispatcher $dispatcher) {
		
		//在这里注册自己的路由协议,默认使用简单路由
	}
	
	public function _initView(Yaf\Dispatcher $dispatcher){
		//在这里注册自己的view控制器
	}
}
