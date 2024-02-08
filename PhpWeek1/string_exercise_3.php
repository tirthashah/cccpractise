<?php
$sentence = "The Quick brown fox jumps over the lazy dog";

//find the position of "FOX" with use of strops function
echo strpos($sentence, "fox");

// find the word cat in the sentence

$cat = strpos($sentence ,"cat") !== false;
echo "does the sentence contain 'cat' ? "  . ($cat ? "yes":"no") . "\n";
 
// using strpos check the sentence have a cat or not and print the ans with yes or no

// exteact and print the first 20 character of the sentence

  echo substr($sentence , 0 ,20);
?>

