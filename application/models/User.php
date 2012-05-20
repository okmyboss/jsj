
<?php

class Model_User extends Zend_Db_Table
{
	protected $_name = 'user';
	protected $_primary = 'id';

	function __construct(){
		$this->mysqli=new MYSQLI($this->host,self::$fake_user,self::$my_password,self::$my_db);
	}

	/**
	 * 获取用户信息
	 *
	 */
	public function getUserById($id)
	{
		$select = $this->select();

		$select->from('user');
		$select->where('uid=?', $id);

		$sql = $select->__toString();
		return $this->_db->fetchAll( $sql );
	}
}