<?php
    require 'connector.php';

    $email = $_POST['email'];
    $username = $_POST['username'];
    $isadmin = 0;
    $telephone = $_POST['telephone'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if($password == $repassword){
        $mysql = "INSERT INTO users (username, email, `password`, telephone) VALUES ('$username', '$email', '$password', '$telephone')";
        if (mysqli_query($connector, $mysql)) {
            header("location: " . BASE_URL . "login.php");
        } else {
            echo "Gagal";
        }
    } else {
        header("location: " . BASE_URL . "register.php");
    }