<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    Utilisateur::registre($username,$password,$email);
    header("location:index?page=login");

}
