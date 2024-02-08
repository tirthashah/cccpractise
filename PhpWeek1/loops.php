//for loop
<?php

for($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
 
echo"<br>";

for ($x = 0; $x <= 10 ; $x++)
{
echo "the number is : $x <br>";
}

//while loop 

$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}
 echo"<br>";

// $a = 1;
// while ($a <=10);
// {
//     echo $a . " ";
//     $a++;
// }


//foreach loop 

$colors= array("red","green","yellow");
foreach ($colors as $x) 
{
    echo "$x <br>";
}
 

//  key and value both are generated 
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}










?>