<?php

if(isset($_POST['submit']) ){
      if(isset($_POST['name']) && isset($_POST['user_list'])) {
          $name = $_POST['name'];
          $tab_user = $_POST['user_list'];
          if (isset($name) && isset($tab_user)) {
              $id = Room::createRoom($name);
              foreach ($tab_user as $tab) {
                  Room::user_Room($tab, $id);
              }
          }
      }

}