<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $email = $_POST['email'];
    $utilisateur::registre($username,$password,$email);
}
?>