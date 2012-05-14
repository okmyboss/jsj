<?php

/**
 * 
 * @author sgboss
 *
 */
require_once APPLICATION_PATH . '/controllers/BaseController.php';
require_once APPLICATION_PATH . '/models/User.php';

class IndexController extends BaseController
{
	
	public function indexAction()
	{
		
		Zend_Dojo::enableView($this->view);
		
		$user = new Model_User();
		$result = $user->fetchAll();
		
		//print_r($result->toArray());
		$this->render('index');
	}


}


