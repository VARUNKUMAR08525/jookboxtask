<?php
require_once('db_config.php');

class DBOperations {
    public $conn;

    function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    function registerUser($name, $email, $password, $address, $phone) {
      

        $sql = "INSERT INTO assignment (name, email, password, address, phone) VALUES ('$name', '$email', '$password', '$address', '$phone')";
        $result = $this->conn->query($sql);
        return $result;
    }

    function loginUser($email, $password) {
        $sql = "SELECT * FROM assignment WHERE email = '$email'";
        $result = $this->conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                return true;
            }
        }

        return false;
    }
}
?>
