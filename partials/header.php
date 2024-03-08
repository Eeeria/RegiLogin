<?php 
define('LOCALHOST', 'localhost');
define('ROOT', 'root');
define('PASSWORD', '');
define('DATABASE', 'login-db');
define('SITEURL', 'http://localhost:8080/RegiLoginPhp/');

$conn = mysqli_connect(LOCALHOST, ROOT, PASSWORD, DATABASE) or  die ("could not connect to mysql"); 
$db_select = mysqli_select_db($conn, DATABASE) or die ("no database"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Claire Condez - Activity 6</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
 