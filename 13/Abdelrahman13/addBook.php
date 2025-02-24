<?php
session_start();

$old = $_SESSION['old'] ?? [];
$errors = $_SESSION['errors'] ?? [];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="storeBook.php" method="post">
        <!-- title -->
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" value="<?= @$old['title'] ?>">
        </div>

        <!-- Author -->
        <div>
            <label for="author">Author</label>
            <input type="text" name="author" value="<?= @$old['author'] ?>">
        </div>

        <!-- year -->
        <div>
            <label for="year">Year</label>
            <input type="number" name="year" value="<?= @$old['year'] ?>">
        </div>

        <!-- type -->
        <div>
            <fieldset>
                <legend>
                    Type
                </legend>
                <input type="checkbox" name="type" value="art" id="art">
                <label for="art">Art</label>
                <input type="checkbox" name="type" value="horror" id="horror">
                <label for="horror">Horror</label>
                <input type="checkbox" name="type" value="fantasy" id="fantasy">
                <label for="fantasy">fantasy</label>
            </fieldset>
        </div>

        <!-- lang. -->
        <div>
            <fieldset>
                <legend>
                    Language
                </legend>
                <input type="radio" name="lang" value="ar" id="ar">
                <label for="ar">Arabic</label>
                <input type="radio" name="lang" value="en" id="en">
                <label for="en">English</label> 
                <input type="radio" name="lang" value="fr" id="fr">
                <label for="fr">French</label>
            </fieldset>
        </div>

        <!-- image -->
        <div>
            <label for="image">Image</label>
            <input type="file" name="image">
        </div>

        <div>
            <button type="submit">
                Add Book
            </button>
        </div>
    </form>

    <div>
        <?php var_dump($errors)  ?>
    </div>
</body>

</html>