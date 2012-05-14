<?php
/**
 * 
 * @author sgboss
 *
 */
class DjdatatableController extends Zend_Controller_Action{
	
	function init(){
		
	}
	
	public function indexAction(){
		
		Zend_Dojo::enableView($this->view);
	}
}