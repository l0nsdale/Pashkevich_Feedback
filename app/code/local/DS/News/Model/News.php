<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21.2.17
 * Time: 17.19
 */

class DS_News_Model_News extends Mage_Core_Model_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('dsnews/news');
    }

}