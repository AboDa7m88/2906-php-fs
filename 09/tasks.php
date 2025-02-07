<?php
//Print Numbers from 1 to 10 (while)
$x = 1;
while ($x <= 10){
    echo "$x <br />";
    $x++;
}

echo "<hr />";

//print numbers from 10 down to 1. (do-while)
$y = 10;
do {
    echo "$y <br />";
    $y--;
}while ($y >= 1);

echo "<hr />";

//Prints all even numbers from 1 to 20 starting the count from 1. (for)
for ($i = 1; $i<=20 ; $i++){
    if ($i%2== 0){
        echo "$i<br />";
    }
}

echo "<hr />";

// Write a for loop that prints the multiplication table of 5 up to 5 × 10. (for)
for ($i = 0; $i<= 10; $i++){
    echo "5 * $i = ",$i*5,"<br />";
}

echo "<hr />";

//print the square of numbers from 1 to 5. (while)

$s = 1;
while ($s <= 5){
    echo "$s ^ 2 = ", $s ** 2, "<br />";
    $s++;
}


echo "<hr />";


echo "<table border='1'>";
for ($i = 1; $i <= 12; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 12; $j++) {
        $result = $i * $j;
        echo "<td>$i * $j = $result</td>";
    }
    echo "</tr>";
}
echo "</table>";