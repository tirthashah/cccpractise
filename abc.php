<?php

class Core_Abstract{
    public function __construct(){
    echo get_class($this);
    }
}

class Product_Main extends Core_Abstract{
    
}

class Product_Model extends Product_Main{

}

$obj=new Product_Model();
echo"<pre>";
print_r($obj);
?>
