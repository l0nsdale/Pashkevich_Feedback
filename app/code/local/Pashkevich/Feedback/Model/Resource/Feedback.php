<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22.2.17
 * Time: 1.01
 */

class Pashkevich_Feedback_Model_Resource_Feedback extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('feedback/table_feedbacks', 'feedbacks_id');
    }

}