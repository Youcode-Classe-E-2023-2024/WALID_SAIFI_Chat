<?php

if(isset($_POST['submit']) ){
      if(isset($_POST['name']) && isset($_POST['user_list'])) {
          $id_user=$_SESSION['id'];
          $name = $_POST['name'];
          $tab_user = $_POST['user_list'];
          if (isset($name) && isset($tab_user)) {
              $id = Room::createRoom($name,$id_user);
              foreach ($tab_user as $tab) {
                  Room::user_Room($tab, $id);
              }
          }
      }

}
$users = Utilisateur::getAll();