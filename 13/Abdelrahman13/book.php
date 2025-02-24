<?php 
session_start();



$book = $_SESSION['The Book'] ?? [];


var_dump($book);
