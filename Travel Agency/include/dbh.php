<?php
$dbServername="localhost";
$Username="root";
$dbPassword="";
$dbName="book";

$conn=mysqli_connect($dbServername, $Username, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
