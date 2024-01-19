
<?php
//integer
// integer data type is a non-decimal  number between -2 to 647
// ver_dump() function return the data type and value
// $x = 757;
// var_dump($x);

// $x = 980;
// var_dump($x);

// $x = 48765;
// var_dump($x);

// //float 
// // Representns number with dacimal points

// $floatvar = 3.14;
// var_dump($floatvar);

// $floatvar = 10.4567;
// var_dump($floatvar);

//string value
// represents a  sequence of characters

// $stringvar1 = "hello world";
// $stringvar = "hey! there";
// var_dump ($stringvar1);
// echo "<br>";
// var_dump ($stringvar);

// //boolean
// //represent either true or false

// $boolvar = true;
// var_dump ($boolvar);

// $boolvar = false;
// var_dump ($boolvar);

//array
// stores multiple values in one single variable

// $arr = array ("happy","lucky","best");
// var_dump($arr);
// echo "<br>";
// $arr1 = array("12","55","89");
// var_dump($arr1);

//null value
 // null value have only the NULL value 
 //the absence of a value or a variable without a value.

//  $x = "hello";
//  $x=null;
//  var_dump ($x);

//  $var = "beautiful";
//  $var= null;
//  var_dump($var);



//type casting


// string - convert datatype string
// $a = 5;       // Integer
// $b = 5.34;    // Float
// $c = "hello"; // String
// $d = true;    // Boolean
// $e = NULL;    // NULL

// $a = (string) $a;
// $b = (string) $b;
// $c = (string) $c;
// $d = (string) $d;
// $e = (string) $e;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);


// integer
// $a = 5;       // Integer
// $b = 5.34;    // Float
// $c = "hello"; // String
// $d = true;    // Boolean
// $e = NULL;    // NULL

// $a = (int) $a;
// $b = (int) $b;
// $c = (int) $c;
// $d = (int) $d;
// $e = (int) $e;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);

// float
//cast of float use the float statement

// $a = 5;       // Integer
// $b = 5.34;    // Float
// $c = "hello"; // String
// $d = true;    // Boolean
// $e = NULL;    // NULL

// $a = (float) $a;
// $b = (float) $b;
// $c = (float) $c;
// $d = (float) $d;
// $e = (float) $e;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);


//boolean 
//cast the boolean with use of bool statement

// $a = 20;
// $a=(bool) $a ;
// var_dump ($a);

// $b = -1 ;
// $b =(bool) $b ;
// var_dump ($b);

// $a = "tirtha";
// $a=(bool)$a;
// var_dump($a);

// $a = "";
// $a=(bool)$a;
// var_dump($a);

// //$a = "null";
// $a = "true";
// $a=(bool)$a;
// var_dump($a);

 //array
 //$a = 69; // integer 
 //$a = 6.9 ; //float
 //$a = null ; //null
//  $a = "hello" ; //string
//  $a = true ; //boolean
//  $a=(array)$a;
//  var_dump($a);


//NULL 
$a = 67 ; //integer 
//$a = 6.91;  //float
$a = "fine"; //string
// $a =true; // boolean
// $a = null; //null
$a=(unset)$a;
var_dump($a);
 ?>



