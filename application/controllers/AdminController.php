<?php
/**
 * 
 */

require_once APPLICATION_PATH . '/controllers/BaseController.php';
require_once APPLICATION_PATH . '/models/Category.php';
class AdminController extends BaseController{
	

	private $aa;
	
	function init(){
		parent::initDb();
		parent::init();
		
		$this->_helper->layout->setLayout('admin');
		
	}
	public function indexAction(){
		
		$this->render('menubar','menubar');
	}
	
	public function urlAction(){
		$this->_helper->viewRenderer->setNoRender();
		
	}
	
}