<?php
$host = "mysql-server";
$user = "root";
$pass = "secret";
$db = "app1";

$conn = mysqli_connect($host, $user, $pass, $db);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
