<?php

Class abc{

   function xyz() {
          return "hello";
     }
    function demo() {
    $xy= $this->xyz();
    echo "$xy";

    }      
     
}

$obj = new abc();
$obj->xyz();
$obj->demo();

//funtion ni ander jo return krtu hoy toh niche object ma function ne call karaiye toh ema print karvau j pdse
// ane jo function ni ander jo echo "hello" thai jay toh tene niche call karaine ene print krvani jarur nathi
?>
