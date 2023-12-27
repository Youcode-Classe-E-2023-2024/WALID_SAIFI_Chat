<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if(!isset( $_SESSION['id'])){
    header("location: index.php?page=login");
}
       echo $_SESSION['id'];
     if(isset($_POST['dec'])){
    utilisateur::logout();
    }

?>

