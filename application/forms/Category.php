
<?php
class Form_Category extends Zend_Form
{
	public function init(){
		$this->setMethod('post');
		$this->setAction('/zf/public/index/add');

		$category_id = $this->createElement('hidden', 'id');
		$this->addElement($category_id);

		$title = $this->createElement('text','name');
		$title->setLabel('类名');
		$title->setRequired(TRUE);
		$title->setAttrib('size', '20');
		$title->addErrorMessage('类名不能为空');
		$title->addValidator('stringLength', false, array(3, 96));
		$this->addElement($title);

		$this->addElement('submit','sumbit',array('label'=>'添加'));
	}
}