<?php

// greet function:

function greet($name) {
    echo "Hello $name";
    echo '<hr>';
}

greet('Abdelrahman');

// Age Function
function Age ($name, $age){
    echo "$name is $age years old";
    echo '<hr>';
}

Age('Abdelrahman','22');


// sum of two num.s
function sum ($n1, $n2) {
    $n3 = $n1 + $n2;
    echo "Sum is:  $n3";
    echo '<hr>';
}

sum('3' ,'5');


// mul of two num.s 
function mul ($n1, $n2) {
    $n3 = $n1 * $n2;
    echo "mul is:  $n3";
    echo '<hr>';
}

mul('3' ,'5');



// full name function:
function fullName($firstName, $lastName) {
    echo "Full name is $firstName $lastName";
    echo '<hr>';
}

fullName('Abdelrahman','Mostafa');


// full name function:
function introduce($name, $age, $city) {
    echo "My name is $name, I am $age years old, and I leave in $city";
    echo '<hr>';
}

introduce('Abdelrahman','22','Damanhour');


// Apply Discount function:
function Discount($price, $discount) {
    $amount = ($price * $discount)/100;
    $total = $price - $amount;
    echo "Applied discount for $price with $discount % off is  $total";
    echo '<hr>';
}

Discount(120,10);


?>