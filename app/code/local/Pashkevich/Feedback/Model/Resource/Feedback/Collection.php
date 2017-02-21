<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22.2.17
 * Time: 0.45
 */


class Pashkevich_Feedback_Model_Resource_Feedback_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('feedback/feedback');
    }

}