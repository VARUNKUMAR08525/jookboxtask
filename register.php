<?php
require_once('db_oper.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];

    $db_oper = new DBOperations();
    $result = $db_oper->registerUser($name, $email, $password, $address, $phone);

    if ($result) {
        echo "Registration successful";
        header("Location: login.php");
        exit();
    } else {
        
        echo "Registration failed. Please try again.";
       
    }
}
?>
