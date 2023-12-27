<?php

class Utilisateur {
    private  $id;
    private $username;
    private $password;
    private $email;

    public function __construct($id){
        global $db;
        $result = $db->query("SELECT * FROM utilisateur WHERE id = '$id'");
        $user = $result->fetch_assoc();

        $this->id = $user['users_id'];

        $this->username = $user['username'];
        $this->email = $user['email'];
        $this->password = $user['password'];
    }
    static public function getId($email) {
        global $db;
        $sql = "SELECT id FROM utilisateur WHERE email = '$email'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
            if($row['id']){
                return $row['id'];
            }
        return NULL;
    }
    

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    static public function registre($username, $password, $email){
        global  $db;
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO utilisateur (username, password, email) VALUES (?, ?, ?)";
        $insert = $db->prepare($sql);

        $insert->bind_param("sss", $username, $hashedPassword, $email);
        $insert->execute();
    }

    static public function login($enteredPassword, $email) {
        global $db;
        $sql_code = "SELECT * FROM utilisateur WHERE email = ?";
        $stmt = $db->prepare($sql_code);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];
            if (password_verify($enteredPassword, $hashedPassword)) {
                return true;
            } else {
                return false;
            }
        }

    }
    static   public function logout() {
        session_start();
        $_SESSION = array();
        session_destroy();
        header("location: index.php?page=login");

    }
    static  public  function  getAll(){
        global $db;
        $result = $db->query("SELECT * FROM  utilisateur");
        return $result->fetch_all(MYSQLI_ASSOC);
    }




}

