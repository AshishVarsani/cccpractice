<?php

class BmiCalculator_Block_Admin_Form extends Core_Block_Template
{

    public function __construct()
    {
        $this->setTemplate('BmiCalculator/form.phtml');
    }

    public function getVendor() 
    {
       return Mage::getModel('BmiCalculator/BmiCalculator')->load($this->getRequest()->getParams('id',0));
    }

    

    

}
