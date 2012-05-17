<?php

class BaseController extends Zend_Controller_Action{
	function init(){
		//默认为前段页面设置layout：font.phtml，后台layout需修改此设置
		$this->_helper->layout->setLayout('font');
	}
	function initDb(){
		
		//初始化数据库适配器
		$path = constant("APPLICATION_PATH") . DIRECTORY_SEPARATOR . "configs/application.ini";
		$dbconfig = new Zend_Config_Ini($path,"mysql");
		$db = Zend_Db::factory($dbconfig->db);
		$db->query("SET NAMES UTF8");
		Zend_Db_Table::setDefaultAdapter($db);
	}
}