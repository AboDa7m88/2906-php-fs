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

?>