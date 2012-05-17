<?php
/**
 * 
 */

require_once APPLICATION_PATH . '/controllers/BaseController.php';
class AdminController extends BaseController{
	function init(){
		parent::initDb();
		
		
		$this->_helper->layout->setLayout('admin');
	}
	public function indexAction(){
		
		
		//$this->getResponse()->appendBody("hello","sliderbar" );

	}
}