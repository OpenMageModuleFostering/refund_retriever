<?php
class Refund_Retriever_Adminhtml_RetrieverController extends Mage_Adminhtml_Controller_action
{
    public function indexAction()
    {   
        Mage::app()->getCacheInstance()->cleanType('config');
        $this->_title($this->__('Refund Retriever'));

        $this->loadLayout();
        $this->_setActiveMenu('retriever');
        //$this->_addBreadcrumb(Mage::helper('adminhtml')->__('Dashboard'), Mage::helper('adminhtml')->__('Dashboard'));
        $this->renderLayout();

    }

}
