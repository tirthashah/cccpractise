<?php

class Sales_Model_Quote_Customer extends Core_Model_Abstract
{

    public function init()
    {
    $this->_resourceClass = 'Sales_Model_Resource_Quote_Customer';
    $this->_collectionClass = 'Resource_Model_Resource_Collection_Quote_Customer';
    $this->_modelClass = 'sales/quote_customer';
    }
}