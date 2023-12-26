<?php
session_start();
if($_POST['submit']){

      $id = Room::createRoom($name);

}