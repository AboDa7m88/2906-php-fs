
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="comment_card">
    <?php
    foreach ($comments as $comment){
        if ($comment['post_id'] == $post['id']){
            echo $comment ['comment'];
        }
    }

    ?>
    </div>
</body>

</html>