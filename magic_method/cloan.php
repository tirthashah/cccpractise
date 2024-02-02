<?php

//copy by value
//copy by reference

class student{
    public $name;
    public $couse;

    public function __construct($n){
           $this->name = $n;
    }
}
$student =new student("tirtha");
$student1 = clone $student;
$student1->name = "hello";
 echo $student1->name;

?>
