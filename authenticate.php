<?php
    require 'connector.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $mysql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connector, $mysql);
    $row = mysqli_fetch_assoc($result);

    if($row){
        if($password == $row["password"]){
            if(!isset($_SESSION))
                session_start();

            $_SESSION['username'] = $row["username"];
            $_SESSION['isAdmin'] = $row["isadmin"];
            header("location: " . BASE_URL . "home.php");
        } else {
            echo "Password Anda Salah";
        }
    } else {
        header("location: " . BASE_URL . "login.php");
    }