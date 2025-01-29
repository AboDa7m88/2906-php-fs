<?php

//function to take 2 num's and return the sum 
function addNumbers($n1,$n2){
    return $n1+$n2;
}

//function to take 3 num's and return the mul
function multiply ($a,$b,$c){
    return $a*$b*$c;
}

//function to take 2 num's and return the divide
function divide($a,$b) {
    return $a/$b;
}

//function to calculate Area
function calculateArea($width, $height) {
    return $width * $height;
}

//function to square a num
function square($n) {
    return $n ** 2;
}

//function to cube a num
function cube($n) {
    return $n ** 3;
}

//function to convertToMinutes
function convertToMinutes($hour) {
    return $hour * 60;
}


// function to convert days to seconds
function convertToSeconds($days) {
    return $days * 24 * 60 * 60;
}

//function to calculate the perimeter
function calculatePerimeter($width, $height) {
    return 2 * ($width + $height);
}

//average function 
function average($a, $b, $c) {
    return ($a + $b + $c) / 3;
}

// function convertTemperature from c to f
function convertTemperature($celsius) {
    return ($celsius * 9 / 5) + 32;
}

//function calculateSpeed
function calculateSpeed($distance, $time) {
    return $distance / $time;
}

//function hypotenuse
function hypotenuse($sideA, $sideB) {
    return sqrt($sideA ** 2 + $sideB ** 2);
}

//power function
function power($base, $exponent) {
    return $base ** $exponent;
}