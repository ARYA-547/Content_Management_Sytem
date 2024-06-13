<?php
$dbHost = "localhost";
$dbUser = "root";
$dbpass = "";
$dbName = "cms";

$conn = mysqli_connect($dbHost, $dbUser, $dbpass, $dbName);
if (!$conn) {
    die("Something went Wrong;");
}
?>
#comment