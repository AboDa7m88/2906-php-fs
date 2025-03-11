<?php

require_once 'vendor/autoload.php';

require_once 'config/database.php';

require_once 'config/app.php';

require_once 'helpers/functions.php';

$models = ['Model','Post', 'Comment', 'Reply', 'PostStatus', 'Reaction', 'ReactionType', 'User'];

foreach ($models as $model) {
    require_once "models/$model.php";
}


$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);