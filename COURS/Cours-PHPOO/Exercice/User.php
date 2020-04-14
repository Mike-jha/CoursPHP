<?php

class User
{
    private $username;
    private $password;
    private $email;

    public function __construct($username, $password, $email)
    {
        $this->username = trim(strip_tags($username));
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Génére une erreur si le mail n'es pas valide
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            trigger_error('Email invalide', E_USER_ERROR);
        }
    }

    public function testPassword($password)
    {
        return password_verify($password, $this->password);
    }
}
