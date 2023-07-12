<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform your validation logic here
    $errors = array();

    // Validate username
    if (empty($username)) {
        $errors[] = "Username is required";
        header("Location: index.php");
        exit();
        echo '<script>alert("Username is required");</script>';

    }

    // Validate password
    if (empty($password)) {
        $errors[] = "Password is required";
        header("Location: index.php");
        exit();
        echo '<script>alert("Password is required");</script>';

    }
    
    // If there are no errors, compare the username and password with the database
    if (empty($errors)) {
        include_once("ValidateCredsClass.php");
        $_SESSION['loggedin'] = true;
        $validate = new ValidateCredsClass();
        $validate ->checkCreds($username, $password);
        header("Location: pages/dashboard.php");
        exit();
    }
    else{
        header("Location: index.php");
    }
}

?>
