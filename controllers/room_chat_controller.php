<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(empty($_SESSION['id'])){
    header("location: index.php?page=login");
}
    echo $_SESSION['id'];
     if(isset($_POST['dec'])){
      utilisateur::logout();
    }

?>

