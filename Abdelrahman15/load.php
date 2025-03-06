<?php 
session_start();

require_once 'config/database.php';
require_once 'config/app.php';

require_once 'helpers/functions.php';


$db = new mysqli(db_host,db_user,db_password,db_name);
dd ($db);
