<?php
Class Catalog_Model_Category extends Core_Model_Abstract
{
    
    public function init(){
         $this->_resourceClass = 'Catalog_Model_Resource_Category';
         $this->_collectionClass = 'Catalog_Model_Resource_Collection_Category';
}

    
}
?>