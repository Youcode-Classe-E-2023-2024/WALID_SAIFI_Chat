<?php
echo "hello registre model";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $usename = $_POST['usename'];
      $password = $_POST['password'];
      $email = $_POST['email'];
     $user = new Utilisateur($usename,$password,$email);
     $user->registre();
     header("index.php?page=login");
}


?>