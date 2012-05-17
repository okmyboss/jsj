<?php
/**
 * 
 */

require_once APPLICATION_PATH . '/controllers/BaseController.php';
require_once APPLICATION_PATH . '/models/Category.php';
class AdminController extends BaseController{
	function init(){
		parent::initDb();
		
		$this->_helper->layout->setLayout('admin');
	}
	public function indexAction(){
		$cate = new Model_Category();
		$list = $cate->getSortedList();
		$this->view->list = $list;
		$json = Zend_Json::encode($list);
		//echo $json;
		
		$this->getResponse()->appendBody($json,"sliderbar" );

	}
}