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
    static public function get_Allroom_massage($id_room) {
        global $db;
        $result = $db->query("SELECT * FROM room 
                         JOIN message ON room.id = message.room_id 
                         JOIN utilisateur ON utilisateur.id = message.utilisateur_id 
                         WHERE room.id='$id_room'");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    static public function ajouter_message($id_user, $id_room, $content) {
        global $db;
        $sql = "INSERT INTO Message (utilisateur_id, room_id, content) 
                        VALUES ('$id_user', '$id_room', '$content')";
        $db->query($sql);
    }
    static public function get_name_room($id)
    {
        global $db;
        $stmt = $db->prepare("SELECT DISTINCT name FROM room WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        return $result->fetch_all(MYSQLI_ASSOC);
    }






}