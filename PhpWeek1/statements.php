<?php
if (5>3)
{
    echo "have a good day";
}
echo"<br>";

$a = 14;
if ($a <20)
{
    echo "have a great day";
}
echo"<br>";

$a = 50;
$b = 50;

if($a == $b)
{
    echo "hello world";
}

 

$a = date ("h");

if($a < "20")
{
    echo "have a grate day";

} else
{
    echo "have a nice";
}

echo"<br>";

//elseif 

$a = date("u");

if ($a <"10")
{
    echo "have a good morning";

}
elseif($a < "20")
{
    echo "have a good day";

}else 
{
    echo "happy";
}

// short hand if else
$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;
 echo "<br>";

//nested ifelse
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}

// switch case 

$favcolor = "red";
 
switch ($favcolor)
{
    case "red" :
        echo "this is my fav color";
        break;
        case "pink":
            echo "this is normal color";
            break;
            case "blue" :
                echo "your favorite color is blue";

            default:
             echo "neither red,blue,pink nor green ";
              
}
 echo"<br>";
 
$dayOfWeek = "Monday";
switch ($dayOfWeek) {
    case "Monday":
        echo "It's the start of the week!";
        break;

    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        echo "It's a weekday.";
        break;

    case "Friday":
        echo "TGIF! It's Friday!";
        break;

    case "Saturday":
    case "Sunday":
        echo "It's the weekend!";
        break;

    default:
        echo "Invalid day of the week.";
}









?>