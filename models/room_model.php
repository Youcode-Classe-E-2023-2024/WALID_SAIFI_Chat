<?php
$id = $_GET['id'];
$_SESSION['id_room']=$id;


$res = Room::get_Allroom_massage($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user_id']) && isset($_POST['room_id']) && isset($_POST['messageInput'])){
    $userId = $_POST['user_id'];
    $roomId = $_POST['room_id'];
    $content = $_POST['messageInput'];
    Room::ajouter_message($userId,$roomId,$content);
    exit();
}
