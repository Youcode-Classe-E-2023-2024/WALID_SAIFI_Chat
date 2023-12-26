<?php

if(isset($_POST['submit'])){
     $name =$_POST['name'];
      $tab_user=$_POST['user_list'];
      if(isset($name) && isset($tab_user)) {
          $id = Room::createRoom($name);
          foreach ($tab_user as $tab) {
              Room::user_Room($tab, $id);
          }
      }

}