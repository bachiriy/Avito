<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'avito_database';

$connect = mysqli_connect($hostname, $username, $password, $database);

if($connect == false){
    die("Could not connect to Database !");
}

?>