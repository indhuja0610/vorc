<?php
$host = "localhost";
$user = "root";  // change if needed
$pass = "";      // your db password
$db   = "vorco";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>
