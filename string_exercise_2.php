<?php
$text = "hello, world! how are you doing?";
// find the length with strlen function
echo  strlen($text);

// show the lowercase with use of strtolower function
echo strtolower($text);

// show the uppercase with use of strtoupper function
echo strtoupper($text);


// Replace "How are you doing?" with "Fine, thank you!". with the use of str_replace function
$replace = str_replace ("how are you doing" ," fine thank you!", $text );
echo $replace;

// expact and print the first 10 characters of the string  with use of substr function 
echo substr($text, 0 , 10);

//expact and print the subsetting starting from 8th caracter to the  and  with use of substr
echo substr($text, 7);


?>