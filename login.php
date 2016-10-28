<?php

$server = 'localhost';
$user = 'root';
$password = '';

mysql_connect($server, $user, $password)
    or die("Unable to connect to MySQL: " . mysql_error());

mysql_select_db('mydb')
   or die("Unable to select database: " . mysql_error());
?>
