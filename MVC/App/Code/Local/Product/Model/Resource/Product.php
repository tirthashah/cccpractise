<?php

class Product_Model_Resource_Product{
    protected $_tableName ="";
    protected $_primarykey = "";
    public function init($tableName, $primarykey)
    {
        $this->_tableName = $tableName;
        $this->_primarykey = $primarykey;
    }
    // above part is abtract
    public function __construct()
    {
        $this->init('ccc_product','product_id');
    }

    public function load($id,$column=null){
            //echo 123;
            $sql= "SELECT * FROM  {$this->_tableName} WHERE 
            {$this->_primarykey}={$id} LIMIT 1";
            echo $sql;

           return $this->getAdapter()->fetchRow($sql);
          
            
    }

    public function getAdapter(){
        return new Core_Model_Db_Adapter();

    }
    public function getPrimaryKey(){
     return $this->_primarykey;
    }

}

?>