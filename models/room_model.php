<?php
$id = $_GET['id'];
$_SESSION['id_room']=$id;


$res = Room::get_Allroom_massage($id);


