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

//
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
print_r(array_splice($a1,0,2,$a2));
//array_splice(array, start, length, array)


//array access
 //array count
 $cars=array("Volvo","BMW","Toyota");
echo count($cars);

//php sizeof
$cars=array("Volvo","BMW","Toyota");
echo sizeof($cars);


//array_key_exists
//The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist.
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("toyoto",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
//check the interger 0 existing in an array 


// array_key
//The array_keys() function returns an array containing the keys.
$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));

$a=array(10,20,30,"10");
print_r(array_keys($a,"10",false)); // false type check not value checking 

$a=array(10,20,30,"10");
print_r(array_keys($a,"10",true)); // type and value both check


//array values
//Return all the values of an array (not the keys):
//starting at 0 and increase by 1.

$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));


//in_array serch 
//The in_array() function searches an array for a specific value.

$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }


//array search
//Search an array for the value "red" and return its key:

    $a=array("a"=>"red","b"=>"green","c"=>"blue");
    echo array_search("red",$a);
    //key return kre

    $a=array("a"=>"5","b"=>5,"c"=>"5");
    echo array_search(5,$a,true);

    //reverse
    //Return an array in the reverse order:
    $a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
    print_r(array_reverse($a));



//filtring
//Filter the values of an array using a callback function:







// mapp
 //The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.
//function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));

// array reduce 
//concet krse
function myfunction($v1,$v2)
{
return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"myfunction",5));

//array slicing
//Start the slice from the third array element, and return the rest of the elements in the array:
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));


$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,-2,1));

//array splice

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
print_r($a1);








?>



