<?php


// $length = 10;
// for ($i = 1; $i <= $length; $i++) {
//     for ($j = 1; $j <= $length; $j++) {

        // if($j >= $i){//front numbers are removed
        //     echo $j;
        // }

        // if($j <= 11 -$i){//back numbers are removed
        //     echo $j;
        // }
//         if ($j >= $i && $j <= $length - $i + 1) {
//             echo "$j ";
//         } else {
//             echo "- ";
//         }
//     }
//     if($i >= $length/2){
//         echo "<br>";
//         break;
//     }
//     echo "<br>";
// }

// for ($i = $length - 1; $i >= 1; $i--) {
//     if($i >= $length/2){
//         continue;
//     }
//     for ($j = 1; $j <= $length; $j++) {
//         if ($j >= $i && $j <= $length - $i + 1) {
//             echo "$j ";
//         } else {
//             echo "- ";
//         }
//     }
//     echo "<br>";
// }














//<?php


// $length = 11;
// for ($i = 1; $i <= $length; $i++) {
//     for ($j = 1; $j <= $length; $j++) {

        // if($j >= $i){//front numbers are removed
        //     echo $j;
        // }

        // if($j <= 11 -$i){//back numbers are removed
        //     echo $j;
        // }
//         if ($j >= $i && $j <= $length - $i + 1) {
//             echo "$j ";
//         } else {
//             echo "- ";
//         }
//     }
//     if($i >= $length/2){
//         echo "<br>";
//         break;
//     }
//     echo "<br>";
// }

// for ($i = $length - 1; $i >= 1; $i--) {
//     if($i >= $length/2){
//         continue;
//     }
//     for ($j = 1; $j <= $length; $j++) {
//         if ($j >= $i && $j <= $length - $i + 1) {
//             echo "$j ";
//         } else {
//             echo "-";
//         }
//     }
//     echo "<br>";
// }


// ?>


<?php
$n=10;
for($i=1;$i<=$n;$i++)
{
    for($j=1;$j<=$n;$j++) 
    {
        if((($i+$j)<$n-2 || ($i+$j)<$n+1) && $i>$j)
        {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        else
        {
            if((($i+$j)>$n+1) && $i<$j)
            {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            }
            else
            {
            echo "&nbsp;".$j."&nbsp;";
            }
        }
        
    }
    echo "<br>";
}
?>