<?php
class Product_Model_Resource_Product
{
    protected $_tableName = "";
    protected $_primaryKey = "";
    public function init($tableName,$primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }

    //Above part is abstract
    public function __construct()
    {
        $this->init('ccc_product','Product_id');
    }
}
