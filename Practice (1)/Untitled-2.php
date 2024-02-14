<?php
function factorial($n) {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}


$number = 5; 

echo "Factorial of $number is: " . factorial($number);
?>

















<?php
$num=15;
$fact = array();
$j=0;
 for($i=1;$i<=$num/2;$i++){
 
    if($num%$i==0)
    {
       $fact[$j]=$i;
       $j++;
    }
  
 }
 print_r($fact);

?>