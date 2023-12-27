<?php

  echo $_SESSION['id'];



if(isset($_POST['dec'])){
    utilisateur::logout();
}
// Votre code ici...
?>

