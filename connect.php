<?php

$user = 'root';
$pass = '';
$db = 'testdb';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");
echo("<script>console.log('Connection to the database has been established successfully!');</script>");
?>