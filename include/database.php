<?php
$host = 'localhost';
$username = 'root';
$password = '1234';
$database = 'hms';
$connection = mysqli_connect($host, $username, $password, $database);

if($connection->connect_error)
{
    echo $connection->connect_error;
}
