<?php
$servername = "mysql.hostinger.mx";
$username = "u812527798_conte";
$password = "c4nt2n3d4s";
$dbname = "u812527798_conte";

$connection = mysqli_connect($servername, $username, $password, $dbname);
$acentos = $connection->query("SET NAMES 'utf8'");
mysql_query('set names utf8'); 
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>