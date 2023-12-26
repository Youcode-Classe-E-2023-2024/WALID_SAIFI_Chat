<?php

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

    static public function registre($username, $password, $email){
        $con = new Database();
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO utilisateur (username, password, email) VALUES (?, ?, ?)";
        $insert = $con->getConnection()->prepare($sql);

        $insert->bind_param("sss", $username, $hashedPassword, $email);
        $insert->execute();
    }

    public function login($enteredPassword, $email) {
        $sql_code = "SELECT * FROM utilisateur WHERE email = ?";
        $data = new Database();
        $stmt = $data->getConnection()->prepare($sql_code);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $Password = $row['password'];
            if (password_verify($enteredPassword, $Password)) {
                return true;
            }else{
                return false; 
            }
        }
    }

    
}


?>
