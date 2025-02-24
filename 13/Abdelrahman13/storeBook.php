<?php
session_start();

extract($_POST);
var_dump($_POST);

$errors = [];


// title
if (empty($title)) {
    $errors['title'] = "Title required";
} else {
    if (!preg_match('/^[a-z\s]+$/i', $title)) {
        $errors['title'] = "only letters and spaces are allowed";
    }
}

// author
if (empty($author)) {
    $errors['author'] = "Author name required";
} else {
    if (!preg_match('/^[a-z\s]+$/i', $author)) {
        $errors['author'] = "only letters and spaces are allowed";
    }
}

// year
if (empty($year)) {
    $errors['year'] = "year required";
} elseif ($year <= 0) {
    $errors['year'] = "can't use this, must be +ve number";
} else {
    if (!preg_match('/^(19|20)\d{2}$/', $year)) {
        $errors['year'] = "put real year ex: 19**,20**";
    }
}


// type
if (empty($type)) {
    $errors['types'] = "you must choose at least one";
}

// lang
if (empty($lang)) {
    $errors['lang'] = "you must choose one";
}


// image
if (empty($image)) {
    $errors['image'] = "you must choose one";
}



if (empty($errors)) {
    $_SESSION['The Book'] = $_POST;
    header('location:book.php');
} else {
    $_SESSION['old'] = $_POST;
    $_SESSION ['errors'] = $errors;
    header('location:addBook.php');
}