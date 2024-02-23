<?php

class Core_Model_Abstract {
    protected $_data = [];
    protected $_resourceClass = '';
    protected $_collectionClass = '';
    protected $_resource = null;
    protected $_collection = null;
    public function __construct() {
        $this->init();

    }
    public function init() {}

    public function setResourceClass($resourceClass){

    }
    public function setCollectionClass($collectionClass){

    }
    public function setId($id){

    }
    public function getId(){

    return $this->_data[$this->getResource()->getPrimaryKey()];

    }
    public function getResource()

    {

        return new $this->_resourceClass();
        // $modelClass = get_class($this);
        // $class = substr($modelClass, 0, strpos($modelClass, '_Model_') + 6) . '_Resource_' . substr($modelClass, strpos($modelClass, '_Model_') + 7);
        // return new $class;
    }
    public function getCollection(){

    }
    
    public function getTableName(){

    }

    public function camelCase2UnderScore($str, $separator = "_")
    {
        if (empty($str)) {
            return $str;
        }
        $str = lcfirst($str);
        $str = preg_replace("/[A-Z]/", $separator . "$0", $str);
        return strtolower($str);
    }

public function __call($method ,$args)
{
    $name = $this->camelCase2UnderScore(substr($method,3));
    return isset($this->_data[$name])
    ? $this->_data[$name]
    : ';';
}




    public function __set($key, $value){

    }
    public function __get($key){

    }
    public function __unset($key){

    }
    public function getData($key=null){

    }
    public function setData($data){

    }
    public function addData($key, $value){

    }
    public function removeData($key = null){

    }
    public function save(){

    }
    public function load($id, $column=null){
       //print_r($this->getResource());
       
      $this->_data = $this->getResource()->load($id, $column);
      return $this;

    }
    public function delete(){

    }
}

?>