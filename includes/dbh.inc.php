<?php


$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "restaurant";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName, '3306');

if (!$conn){
    die("Connection failed:" .mysqli_connect_error());
}
?>

