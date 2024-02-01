<?php
require_once('db_oper.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $db_oper = new DBOperations();
    $loggedIn = $db_oper->loginUser($email, $password);
    if ($loggedIn) {
        echo "Login successful!";
    } else {
        echo "Invalid email or password. Please try again.";
        $linkText = "Click me"; 
        $destination = "http://localhost/jookboxassesment/"; 
        echo "<a href='$destination'>$linkText</a>";
    }
}
?>
