<?php
echo "hello registre model";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $user = new Utilisateur($username, $password, $email);
    $user->registre();

    header("location: index.php?page=login");
 
}
?>
