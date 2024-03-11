<?php

require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];

if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
    echo "Fill form fields!";
} else {
    if ($pass != $repeatpass) {
        echo "Passwords don't match!";
    } else {
        $sql = "INSERT INTO `users` (login, pass, email) VALUES ('$login', '$pass', '$email')";
        if ($conn->query($sql)) {
            echo "Successful Sign Up!";
        } else {
            echo "Error: . $conn->error";
        }
    }
}
