<?php
class Core_Model_Abstract{
    public function __construct(){
        $this->init();
    }
    public function init(){}
    protected $_data = [];
    protected $_resourceClass = '';
    protected $_collectionClass = '';
    protected $_resource = null;
    protected $_collection = null;
    // public function __construct(){}
    public function setResourceClass($resourceClass){}
    public function setCollectionClass($collectionClass){}
    public function setId($id){
        $this->_data[$this->getResource()->getPrimaryKey()]= $id;
        return $this;
    }
    public function getId(){
        return $this->_data[$this->getResource()->getPrimaryKey()];
    }
    // public function getResource(){
    //     $modelClass = get_class($this);
    //     $class = substr($modelClass,0,strpos($modelClass,'_Model_')+6) . "_Resource_" .substr($modelClass,strpos($modelClass,'_Model_')+7);
    //     // var_dump($class);//"Product_Model_Resource_Product"
    //     return new $class;
    // }
    public function getResource()
    {
        // $modelClass = get_class($this);
        // $modelClass = str_replace('_Model_', '_Model_Resource_', $modelClass);        
        // return new $modelClass();

       return new $this->_resourceClass(); // catalog_model_resource_product no calass banse eno object avse
    }
    public function getCollection(){}
   
    public function getTableName(){}
    public function camelCase2UnderScore($str, $separator = "_")
    {
        if (empty($str)) {
            return $str;
        }
        $str = lcfirst($str);
        $str = preg_replace("/[A-Z]/", $separator . "$0", $str);
        return strtolower($str);
    }
    public function __call($method, $args){
       $name= $this->camelCase2UnderScore(substr($method,3));
       return isset($this->_data[$name]) ? $this->_data[$name] : '';
    }
    public function __set($key, $value){}
    public function __get($key){}
    public function __unset($key){}
    public function getData($key=null){
        return $this->_data;
    }
    public function setData($data){
        $this->_data = $data;
        return $this;
    }
    public function addData($key, $value){}
    public function removeData($key = null){}
    public function save(){
        $this->getResource()->save($this); //get recource no object apse
        return $this;
    }
    public function load($id, $column=null){
    //    $this->getResource();
    $this->_data=$this->getResource()->load($id, $column);
    return $this;
    }
    public function delete($id){
        $this->getResource()->delete($id);
        return $this;
    }
            
}