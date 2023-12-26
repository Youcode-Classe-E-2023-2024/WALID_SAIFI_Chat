<?php

class Utilisateur {
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
        } else {
            return false;
        }

    }




}

