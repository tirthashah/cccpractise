<?php
class student{
    private $course = "php";
    private $first_name;
    private $last_name;

public function setname($fname,$lname){
    $this->first_name = $fname;
    $this->last_name=$lname;
}

public function __sleep(){
    return array("first_name","last_name");
}
}

$obj = new student();
$obj->setname("yahoo","baba");
$srl = serialize($obj);
echo $srl;

//o mins object //7 caracter 3 propeties
?>