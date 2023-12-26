<?php

if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    $email = $_POST['email'];
    dd($_POST);
    Utilisateur::login($password,$email);
    header("location:index?page=room_chat");

}