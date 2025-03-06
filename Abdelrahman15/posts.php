<?php
require_once 'load.php';

$table = db_prefix . 'posts';

$q = "SELECT * FROM $table;";

$res - $db->query($q);

$posts = $res->fetch_all();

dd($posts);