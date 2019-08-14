<?php
class Refund_Retriever_Block_Endpoint_Renderer extends Mage_Adminhtml_Block_System_Config_Form_Field
{
   
     protected function _prepareLayout()
    {
        parent::_prepareLayout();
        if (!$this->getTemplate()) {
            $this->setTemplate('retriever/system/config/disabled_endpoint.phtml');
        }
        return $this;
    }

    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
        return parent::render($element);
    }

    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $value = Mage::getSingleton('core/session')->getRetriever_endpoint();
        if($value <= 0){
         
        $value = $element->getEscapedValue();
        
        }
        $originalData = $element->getOriginalData();
        $this->addData(array(
            'my_value' => $value,
            'html_id' => $element->getHtmlId(),
        ));
        return $this->_toHtml();
    }
}
