<?php
class Calculator_Block_Form extends Core_Block_Template{


public function __construct(){
        $this->setTemplate("calculator/form.phtml");
    }

public function getCalculator()
    {
         return Mage::getModel('calculator/calculator')->load($this->getRequest()->getParams('id', 0));
       // return Mage::getModel('catalog/product')->load($this->getRequest()->getParams('id', 0));
    }
}
    ?>