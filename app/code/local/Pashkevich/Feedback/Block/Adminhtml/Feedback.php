<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22.2.17
 * Time: 0.20
 */

class Pashkevich_Feedback_Block_Adminhtml_Feedback extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    protected function _construct()
    {
        parent::_construct();

        $helper = Mage::helper("feedback");
        $this->_blockGroup("adminhtml_feedback");

        $this->_headerText = $helper->__("Feedback Management");
    }
}