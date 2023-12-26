<?php

class Room
{
    public $name;
    public $id;
    public function __construct($id)
    {
        global $db;
        $result = $db->query("SELECT * FROM room WHERE id = '$id'");
        $room = $result->fetch_assoc();

        $this->id = $room['id'];
        $this->name = $room['room'];
    }
    static  public function createRoom($name){
        global $db;
        $sql = "INSERT INTO room (name) VALUES (?)";

        $insert = $db->prepare($sql);

        $insert->bind_param("s",$name);

        $insert->execute();

    }
    static public function user_Room($id_user, $id_room){
        global $db;

        $sql = "INSERT INTO utilisateur_room (utilisateur_id, room_id) VALUES (?, ?)";
        $insert = $db->prepare($sql);

        $insert->bind_param("ii", $id_user, $id_room);

        if ($insert->execute()) {
            return $db->insert_id;
        } else {
            return false;
        }
    }


}