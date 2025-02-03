<?php
$score = 98;
$color = 'black';
$grade = 'N/A';


 if ($score >= 95){
    $color="blue";
    $grade="A+";
 }
 elseif ($score >= 90){
    $color="green";
    $grade="A";
 }
 elseif ($score >= 85){
    $color="skyblue";
    $grade="B+";
 }
 elseif ($score >= 80){
    $color="magenta";
    $grade="B";
 }
 elseif ($score >= 75){
    $color="goldenrod";
    $grade="C+";
 }
 elseif ($score >= 70){
    $color="darkgray";
    $grade="C";
 }
 elseif ($score >= 65){
    $color="black";
    $grade="D";
 }
 elseif ($score >= 50){
    $color="orange";
    $grade="E";
 }
 else{
    $color="red";
    $grade="F";
 }


 echo "<h3 style='color: $color'>Score $score is $grade</h3>";