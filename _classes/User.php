<?php

class Utilisateur {
    private $username;
    private $password;
    private $email;

    // Constructeur
    public function __construct($username, $password, $email) {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    // Méthode pour obtenir le nom d'utilisateur
    public function getUsername() {
        return $this->username;
    }

    // Méthode pour définir le nom d'utilisateur
    public function setUsername($username) {
        $this->username = $username;
    }

    // Méthode pour obtenir le mot de passe
    public function getPassword() {
        return $this->password;
    }

    // Méthode pour définir le mot de passe
    public function setPassword($password) {
        $this->password = $password;
    }

    // Méthode pour obtenir l'e-mail
    public function getEmail() {
        return $this->email;
    }

    // Méthode pour définir l'e-mail
    public function setEmail($email) {
        $this->email = $email;
    }
}

// Exemple d'utilisation de la classe Utilisateur
$utilisateur = new Utilisateur("john_doe", "motdepasse123", "john.doe@example.com");

// Obtention des informations de l'utilisateur
echo "Nom d'utilisateur : " . $utilisateur->getUsername() . "<br>";
echo "Mot de passe : " . $utilisateur->getPassword() . "<br>";
echo "E-mail : " . $utilisateur->getEmail() . "<br>";

// Modification du nom d'utilisateur
$utilisateur->setUsername("new_username");

// Affichage du nouveau nom d'utilisateur
echo "Nouveau nom d'utilisateur : " . $utilisateur->getUsername() . "<br>";

?>
