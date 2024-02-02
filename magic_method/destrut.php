<?php
class abc{
    public  function __construct(){
        echo "this is the function";     
    }

   
    public function __destruct(){
        echo"this is destruct";
    }

public function hello(){
    echo"hello everyone";
}
}

$test = new abc();
$test->hello();


//destruct ae automatically call thay objet no last code joya pachi automatically j run thai jay
?>