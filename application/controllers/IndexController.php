<?php

/**
 * 
 * @author sgboss
 *
 */
require_once '../application/models/User.php';

class IndexController extends Zend_Controller_Action
{

	public function init()
	{
		$this->_helper->getHelper("layout")->setLayout("layout");
		
	}

	/**
	 * index action test
	 *
	 */
	public function indexAction()
	{
		
		//初始化我们的数据库适配器
		$url = constant("APPLICATION_PATH") . DIRECTORY_SEPARATOR . "configs/application.ini";
		$dbconfig = new Zend_Config_Ini($url,"mysql");
		$db = Zend_Db::factory($dbconfig->db);
		$db->query("SET NAMES UTF8");
		Zend_Db_Table::setDefaultAdapter($db);
		
		$user = new Model_User();
		$result = $user->fetchAll();
		
		print_r($result);
		$this->render('index');
	}


}


