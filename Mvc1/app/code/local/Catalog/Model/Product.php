<?php

class Catalog_Model_Product extends Core_Model_Abstract
{
    // public function __construct()
    // {

    // }
    public function init(){
         $this->_resourceClass = 'Catalog_Model_Resource_Product';
         $this->_collectionClass = 'Catalog_Model_Resource_Collection_Product';
    }

}