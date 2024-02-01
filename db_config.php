<?php
$servername = "your_mysql_server";
$username = "your_mysql_username";
$password = "your_mysql_password";
$dbname = "your_database_name";

$conn = new mysqli("localhost:3307", "root", "", "jookbox");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
