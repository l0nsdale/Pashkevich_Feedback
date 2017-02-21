<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22.2.17
 * Time: 0.05
 */

class Pashkevich_Feedback_Adminhtml_FeedbackController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->_setActiveMenu("feedback");
        $contentBlock = $this->getLayout()->createBlock("feedback/adminhtml_feedback_grid");
        $this->_addContent($contentBlock);
        $this->renderLayout();
    }

}