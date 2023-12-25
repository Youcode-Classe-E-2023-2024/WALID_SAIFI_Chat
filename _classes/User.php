<?php
require_once("Database.php");

class Utilisateur {
    private $username;
    private $password;
    private $email;

    public function __construct($username, $password, $email) {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
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

    public function registre(){
        $con = new Database();
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO utilisateur (username, password, email) VALUES (?, ?, ?)";
        $stmt = $con->getConnection()->prepare($sql);
    
        $stmt->bind_param("sss", $this->username, $hashedPassword, $this->email);
        $stmt->execute();
    }
}

?>
