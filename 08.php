<?php
$score = 70;
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





 // week msg 
 $day_name ="monday";
 if ($day_name == "saturday" || $day_name == "friday"){
    echo "this day is $day_name, happy weekend";
 }
 elseif ($day_name == "sunday" || $day_name == "monday"|| $day_name == "tuesday"|| $day_name == "wednesday"|| $day_name == "thursday" ){
    echo "this day is $day_name, enjoy your work :)";
 }
 else {
    echo "Invalid day name";
 }
