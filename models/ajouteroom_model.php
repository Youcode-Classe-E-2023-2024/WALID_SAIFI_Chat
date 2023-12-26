<?php

if($_POST['submit']){
    dd($_POST);
$name =$_POST['name'];
$tab_user=$_POST['user_list'];
      if(isset($name) && isset($tab_user)) {
          $id = Room::createRoom($name);
          foreach ($tab_user as $tab) {
              Room::user_Room($tab, $id);
          }
      }
}