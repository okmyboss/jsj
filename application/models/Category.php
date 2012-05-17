
<?php

class Model_Category extends Zend_Db_Table_Abstract
{
	protected $_name = 'category';
	private $allItems = null;

	
	/**
	 * 重写fetchAll函数以减少数据库的查询次数
	 * @see Zend_Db_Table_Abstract::fetchAll()
	 */
	public function fetchAll($where = null, $order = null, $count = null, $offset = null){
		if ($this->allItems == null){
			$this->allItems = parent::fetchAll($where = null, $order = null, $count = null, $offset = null);
		}
		return $this->allItems;
	}
	/**
	 * 获得经过排序的数组列表
	 */
	public function getSortedList(){
		$all = $this->fetchAll();
		foreach ($all as $key =>$value){
			
		}
		return $all;
	}
}