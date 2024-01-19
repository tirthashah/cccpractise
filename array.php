<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

//array merge 
$a = array("red","green","blue");
$b = array("yellow","pink","orange");
print_r(array_merge($a,$b));


//Using only one array parameter with integer keys:
$a=array(3=>"red",4=>"green"); 
print_r(array_merge($a));



//array combine
//The array_combine() function creates an array by using the elements from one "keys" array and one "values" array.
//Both arrays must have equal number of elements!
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);

//range
//The range() function creates an array containing a range of elements.
$number = range(0,5);
print_r ($number);

$number = range(1,8);
print_r ($number);

$number = range(0,50,10);
print_r ($number);

$letter = range("a","d");
print_r ($letter);


//array push
//The array_push() function inserts one or more elements to the end of an array.
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
echo"<br>";

//array pop
// array pop element function deletes the last element of an array
$a=array("red","green","blue");
array_pop($a);
print_r($a);
echo"<br>";

//array unshift
//You can add one value, or as many as you like.
$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");
print_r($a);

//arry_shift
//Remove the first element (red) from an array, and return the value of the removed element:
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a);
print_r ($a);


//arry splice
//Remove elements from an array and replace it with new elements
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
print_r($a1);













?>



