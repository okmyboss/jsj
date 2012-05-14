    <?php

    class Model_Category extends Zend_Db_Table_Abstract
    {
            protected $_name = 'category';
            protected $_primary = 'id';


            /**
             * 添加类别名字
             *
             * @param string $name
             * @return integer
             */
            public function add($name)
            {
                    $row = $this->createRow();
                    $row->name = $name;
                    return $row->save();
            }

    }