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
    static public function createRoom($name, $id) {
        global $db;
        $sql = "INSERT INTO room (name, id_createur) VALUES (?, ?)";
    
        $insert = $db->prepare($sql);
        
        $insert->bind_param("ss", $name, $id);
    
        if ($insert->execute()) {
            return $db->insert_id;
        } else {
            return false;
        }
    }
    
    static public function user_Room($id_user, $id_room){
        global $db;

        $sql = "INSERT INTO utilisateur_room (utilisateur_id, room_id) VALUES (?, ?)";
        $insert = $db->prepare($sql);

        $insert->bind_param("ii", $id_user, $id_room);
        $insert->execute();

    }
    static public function getAllroom($id){
        global $db;
        $result = $db->query("SELECT * FROM room JOIN utilisateur_room ON room_id=id WHERE utilisateur_id='$id' ORDER by room.id DESC;");
        return $result->fetch_all(MYSQLI_ASSOC);

    }
    static public function getAll_dernier_room($id){
        global $db;
        $result = $db->query("SELECT * FROM room WHERE id IN
         (SELECT MAX(id) FROM room JOIN utilisateur_room ON room.id = utilisateur_room.room_id WHERE utilisateur_room.utilisateur_id = '$id')");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    static public function get_All_massage_room($id){
        global $db;
        $result = $db->query("SELECT * FROM message WHERE utilisateur_id = $id");
        return $result->fetch_all(MYSQLI_ASSOC);

    }
    


}