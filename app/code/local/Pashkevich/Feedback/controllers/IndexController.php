<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21.2.17
 * Time: 18.24
 */

class Pashkevich_Feedback_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function feedbackAction()
    {
        $name = Mage::app()->getRequest()->getParam("name");
        $email = Mage::app()->getRequest()->getParam("email");
        $message = Mage::app()->getRequest()->getParam("message");
        $mail = Mage::getModel('core/email');
        $mail->setToName($name);
        $mail->setToEmail($email);
        $mail->setBody($message);
        $mail->setSubject(Mage::helper("feedback")->__('Feedback'));
        $mail->setType('text');
        if (isset($name, $email, $message)) {
            if (!empty($name) && !empty($message)) {
                try{
                    $mail->send();
                    $model = Mage::getModel("feedback/feedback");
                    $model->setName($name);
                    $model->setEmail($email);
                    $model->setMessage($message);
                    $model->save();
                } catch (Exception $exception) {

                }
            }
            $this->loadLayout();
            $this->getLayout()->getBlock("thank")->assign(array(
                "name" => $name,
            ));
            $this->renderLayout();
        }

    }


}