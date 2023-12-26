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

}