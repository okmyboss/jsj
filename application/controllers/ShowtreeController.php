<?php


class showtreeController extends Zend_Controller_Action{
	
	function init(){

		$this->_helper->layout->setLayout('admin');

		
		Zend_Dojo::enableView($this->view);
		$this->view->dojo()->enable()
						   ->setDjConfigOption('parseOnLoad', true)
						   ->registerModulePath('custom', '../custom/')
						   ->requireModule('dijit.form.FilteringSelect')
						   ->requireModule('custom.PairedStore');
				
	}
	
	public function indexAction(){
		
	}
	
}