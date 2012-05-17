<?php
/**
 * 
 * @author sgboss
 *
 */
class DjtableController extends Zend_Controller_Action{
	
	function init(){
		
	}
	
	public function indexAction(){
		
		Zend_Dojo::enableView($this->view);
	}
}