<?php

if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    $email = $_POST['email'];
    if (Utilisateur::login($password, $email)) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['id'] = Utilisateur::getId($email);

        header("location: index?page=room_chat");
    } else {

        echo "Login failed. Please check your credentials.";
    }
}
