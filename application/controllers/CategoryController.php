<?php
require_once APPLICATION_PATH . '/controllers/BaseController.php';
require_once APPLICATION_PATH . '/models/Category.php';

class categoryController extends BaseController{
	
	function init(){
		
		parent::initDb();
		$this->_helper->layout->disableLayout();
	}
	public function getjsonAction(){
	
		$this->_helper->viewRenderer->setNoRender();
		$this->getResponse()->clearBody();
	
		$cate = new Model_Category();
		$list = $cate->getSortedList();
	
		$json = "{'identifier': 'id','label': 'name','items': " . Zend_Json::encode($list) . "}";
	
		echo $json;
	}
	function getlistAction(){
		$RequireDojo = array("dijit.Tree");
		
		$this->render('tree');

		$text = $this->getResponse()->getBody();
		$this->getResponse()->clearBody();
		
		$return = Zend_Json::encode(array('RequireDojo' => $RequireDojo, 'text' => $text));
		
		$this->getResponse()->appendBody($return);
		
	}
	function add1Action(){
		
		$form = new Zend_Form(array(
				'id'       => 'form',
				'method'   => 'post',
				'action'   =>  "http://" . HTTP_HOST . '/category/add2',
				'elements' => array(
						'name' => array('text', array(
								'required' => true,
								'label' => 'Name',
								'validators' => array('alpha')
						)),
						'age' => array('text', array(
								'required' => true,
								'label' => 'Age',
								'validators' => array('digits'),
								'filters' => array('StringToUpper')
						)),
		
						'submit' => array('submit', array(
								'label' => 'Send'
						))
				),
		));
		Zend_Dojo::enableForm($form);
		$form->setDecorators(array(
				'FormElements',
				array('TabContainer', array(
						'id'          => 'tabContainer',
						'style'       => 'width: 600px; height: 500px;',
						'dijitParams' => array(
								'tabPosition' => 'top'
						),
				)),
				'DijitForm',
		));
		$form->addElement(
				'CheckBox',
				'fooo',
				array(
						'label'          => 'A check box',
						'checkedValue'   => 'foo',
						'uncheckedValue' => 'bar',
						'checked'        => true,
				)
		);
		$form->addElement(
				'ComboBox',
				'foo',
				array(
						'label'        => 'ComboBox (select)',
						'value'        => 'blue',
						'autocomplete' => false,
						'multiOptions' => array(
								'red'    => 'Rouge',
								'blue'   => 'Bleu',
								'white'  => 'Blanc',
								'orange' => 'Orange',
								'black'  => 'Noir',
								'green'  => 'Vert',
						),
				)
		);
		$form->addElement(
				'ComboBox',
				'foo3',
				array(
						'label'       => 'ComboBox (datastore)',
						'storeId'     => 'stateStore',
						'storeType'   => 'dojo.data.ItemFileReadStore',
						'storeParams' => array(
								'url' => '/js/states.txt',
						),
						'dijitParams' => array(
								'searchAttr' => 'name',
						),
				)
		);
		$form->addElement(
				'NumberSpinner',
				'foo89',
				array(
						'value'             => '7',
						'label'             => 'NumberSpinner',
						'smallDelta'        => 5,
						'largeDelta'        => 25,
						'defaultTimeout'    => 500,
						'timeoutChangeRate' => 100,
						'min'               => 9,
						'max'               => 1550,
						'places'            => 0,
						'maxlength'         => 20,
				)
		);
		echo $form->render();
	}
}