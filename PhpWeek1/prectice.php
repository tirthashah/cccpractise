<?php
//strlen() function prectice

//  $str = "welcome to the world";
//     echo  strlen("");
//     echo strlen($str);
// this function return the lengh of a given string. it takes a string as a parameter and return its length.



// str_replace prectice

//echo str_replace("world","tirtha","hello world");
// echo str_replace("happy","about","together");
// function replace characters with some other caracters in string.


//strpos function

// echo strpos("hello my world, i love php","php");
// echo stripos("hello my world, i love php","Php");
// echo strripos("exploring is best,my life is best","best");

// find the position of the first occurrence of "php" inside the string and strripos find the position of last occurrence of a string inside the another string.
// stripos are case sensitive and strpos is non case sensitive.


// substr() function

// echo substr("hello world",6);
// echo substr("hello world",3);
// echo substr("hello world", 10);
// echo substr("hello tirtha", 5);
//echo substr("hello world",-4);
//echo substr("hello world",-2);
//echo substr ("hello world",0);
//echo substr ("hello world",-4);
//echo substr("hello world",-6);

// this function returns a part of a string. start is return a parameter. 

// strtoupper() function
// echo strtoupper("tirtha");
// converts a string into upper

//strtolower() function 
// echo strtolower("TIRTHA");
//convert a string into lower

// trim() function
// $str = "hello world";
// //echo trim($str,"hed");
// echo trim($str,"hello" );
// echo "without trim" .$str;
// echo "with trim" .trim($str);

// removing whitespace and other character from the begining and end of string


//implode() function
//  $arr = array('hello','world','beautiful','day');
//  echo implode(" ",$arr);
//   echo implode("+",$arr);
//   echo implode("-",$arr);
 // return a string from the elements of an array join the array element with a string


 //explode() funtion

//  $str ="hello ,world, its,beautiful,day,22";
//  //print_r (explode(" ",$str));
//  print_r(explode(",",$str,2));
// print_r(explode(",",$str,4))

//explode function break  string into array 

  

// htmlspecialchars() function
// $string_with_line_break = "this is some <b>bold</b> text. \n <p>converting <and > into entities and often used to prevent browsers from using it as an HTML element. this can be especially useful to prevent code from running when users have access to display input on your homepage</p>";
// echo $string_with_line_break;

//$str ="Tirtha &  'Shah'";
//echo htmlspecialchars($str , ENT_COMPAT); // convert double string  quotes
//echo htmlspecialchars($str , ENT_QUOTES); // convert double and single quotes
//echo htmlspecialchars($str , ENT_NOQUOTES); //does not convert any quotes
// this functuon convert some predefine characters to HTML entities.



// htmlentities() function 
// $str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
// echo htmlentities($str);
// $str = "ablert said: 'E=MC'";
// echo htmlentities($str, ENT_COMPAT); // Convert only double quotes
// echo htmlentities($str, ENT_QUOTES);   // convert double and single quotes
// echo htmlentities($str, ENT_NOQUOTES);  //does not  convert any quotes

 //convert some characters to HTML  entities


 // str_repeat() function 
//echo str_repeat("tirtha",20);
  // repeate a string a specificed number of times.


// strrev() function
//echo strrev("tirtha shah");
// reverses a string.

//str_shuffle() string
//echo str_shuffle("hello this is")
// randomly shufflles all characters.
?>



