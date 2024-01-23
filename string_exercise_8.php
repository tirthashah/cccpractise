<?php

function isPrime($number) {
    // 1 and numbers less than 1 are not prime
    if ($number <= 1) {
        return false;
    }

    
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            // If there is a factor, the number is not prime
            return false;
        }
    }

    
    return true;
}


$testNumber = 18;

if (isPrime($testNumber)) {
    echo $testNumber . " is a prime number.";
} else {
    echo $testNumber . " is not a prime number.";
}


echo"<br>";
$testNumber = 88;

if (isPrime($testNumber)) {
    echo $testNumber . " is a prime number.";
} else {
    echo $testNumber . " is not a prime number.";
}
















