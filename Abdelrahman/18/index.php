<?php

require_once 'load.php';
$posts = Post::all(1);
$users = User::all();
$statuses = PostStatus::all();
$comments = Comment::all();
// dd($comments);
//dd($status);
//dd($users);
// dd($posts);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACEBOOK</title>
    <link rel="icon" href="assets\images\download.png">

</head>

<body>
    <div class="page">
        <?php

        foreach ($posts as $post) {
            require "components/post.php";
        }

        ?>
    </div>


</body>

</html>