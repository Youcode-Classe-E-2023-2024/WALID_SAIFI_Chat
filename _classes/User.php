<?php

   class utilisateur {
    private $id;
    private $username;
    private $password;
    private $email;
    public function __construct($id, $username, $password, $email) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }



}

