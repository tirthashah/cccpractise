<?php

class Product_Model_Resource_Product {

  protected $_tablename="";
  protected $_primarykey="";

  public function init($_tablename,$_primarykey){
    $this->_tablename=$_tablename;
    $this->_primarykey=$_primarykey;

  }
  //about part is abstrct

  public function __construct(){
    $this->init('ccc_product','product_id');
  }

}
?>