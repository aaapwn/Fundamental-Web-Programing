<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "s185e";
$servername = "localhost";
$username = "S185E";
$password = "VQ60973";
$dbname = "s185e";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
