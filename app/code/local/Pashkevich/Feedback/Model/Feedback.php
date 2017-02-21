<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22.2.17
 * Time: 0.43
 */

class Pashkevich_Feedback_Model_Feedback extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('feedback/feedback');
    }
}