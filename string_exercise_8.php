<?php

function isPrime($number) {
    // 1 and numbers less than 1 are not prime
    if ($number <= 1) {
        return false;
    }

    // Check for factors up to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            // If there is a factor, the number is not prime
            return false;
        }
    }

    // If no factors are found, the number is prime
    return true;
}

// Example usage
$testNumber = 18;

if (isPrime($testNumber)) {
    echo $testNumber . " is a prime number.";
} else {
    echo $testNumber . " is not a prime number.";
}


echo"<br>";


function isPrimen($num) {
    // 1 and numbers less than 1 are not prime
    if ($num <= 1) {
        return false;
    }

    // Check for factors up to the square root of the number
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            // If there is a factor, the number is not prime
            return false;
        }
    }

    // If no factors are found, the number is prime
    return true;
}

// Example usage
$testNumber = 43;

if (isPrime($testNumber)) {
    echo $testNumber . " is a prime number.";
} else {
    echo $testNumber . " is not a prime number.";
}




  ?>














