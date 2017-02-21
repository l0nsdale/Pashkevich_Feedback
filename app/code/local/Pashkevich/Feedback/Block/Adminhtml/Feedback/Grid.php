<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22.2.17
 * Time: 0.29
 */

class Pashkevich_Feedback_Block_Adminhtml_Feedback_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('feedback/feedback')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

        $helper = Mage::helper('feedback');

        $this->addColumn('feedbacks_id', array(
            'header' => $helper->__('Feedback ID'),
            'index' => 'feedbacks_id'
        ));

        $this->addColumn('email', array(
            'header' => $helper->__('Email'),
            'index' => 'email',
            'type' => 'text',
        ));

        $this->addColumn('name', array(
            'header' => $helper->__('Name'),
            'index' => 'name',
            'type' => 'text',
        ));

        $this->addColumn('message', array(
            'header' => $helper->__('Message'),
            'index' => 'message',
            'type' => 'text',
        ));

        return parent::_prepareColumns();
    }
}