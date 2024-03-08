<?php 

session_start();

define('LOCALHOST', 'localhost');
define('ROOT', 'root');
define('PASSWORD', '');
define('DATABASE', 'login-db');
define('SITEURL', 'http://localhost/RegiLoginPhp/');

$conn = mysqli_connect(LOCALHOST, ROOT, PASSWORD, DATABASE) or  die ("could not connect to mysql"); 
$db_select = mysqli_select_db($conn, DATABASE) or die ("no database"); 



?>