<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }



        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            padding: 20px;
            width: 500px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;

        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }


        .state {
            font-size: 14px;
            font-weight: bold;
            color: #666;
            margin-bottom: 10px;
        }

        .info {
            font-size: 14px;
            color: #888;
            margin-bottom: 15px;
        }

        .info span {
            font-weight: bold;
            color: #555;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .body {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .comment {
            font-size: 14px;
            color: #007bff;
            cursor: pointer;
            transition: color 0.3s ease;
            text-decoration: none;
        }

        .comment:hover {
            color: rgb(18, 0, 179);
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="page">

        <div class="card">
            <p class="state"><?php
            foreach ($statuses as $status) {
                if ($status['id'] == $post['post_status_id'])
                    echo $status['type'];
            }
            ?>
            </p>
            <div class="info">
                <?php
                foreach ($users as $user) {
                    // dd($user);
                    if ($user['id'] == $post['user_id'])
                        echo $user['name'];
                }
                echo $post['created_at'];
                ?>

            </div>

            <h2 class='title'> <?= $post['title'] ?> </h2>
            <p class='body'> <?= $post['body'] ?> </p>
            <p class="comment">
                Comments
                <?php
                foreach ($comments as $comment) {
                    require "components/comment_card.php";
                }
                ?>
            </p>



        </div>
    </div>
</body>

</html>