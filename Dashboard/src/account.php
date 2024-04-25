<?php

include_once("database.php");

Class Account extends Database 
{
    private $accountId;
    private $email;
    private $username;
    private $password;


public function getAllUsers() {
    $query = "SELECT * from accounts";
    return parent::voerQueryUit($query);
}


public function getUser($userId) {
    $query = "SELECT * FROM accounts WHERE email = '$userId'";
    return parent::voerQueryUit($query);
}

public function getUserByName($userName)
{
    $query = "SELECT * from accounts where username = '$userName'";
    return parent::voerQueryUit($query);
}


public function getUserById($userId)
{
    $query = "SELECT * FROM accounts where id = '$userId'";
    return parent::voerQueryUit($query);
}

public function updatePassword($password, $userId) {
    $query = "UPDATE accounts
    SET password = '$password'
    WHERE id = '$userId'";
    return parent::voerQueryUit($query);
}

public function maakBeheer($id) {
    $query = "UPDATE accounts
    SET beheer = 1
    WHERE id = '$id'";
    return parent::voerQueryUit($query);
}

public function verwijderBeheer($id) {
    $query = "UPDATE accounts
    SET beheer = 0
    WHERE id = '$id'";
    return parent::voerQueryUit($query);
}

public function registerUser() {

    if(
        $this->getEmail() == "" || $this->getUsername() == "" || $this->getPassword() == ""
    ){
        return false;
    }

    $email = $this->getEmail();
    $username = $this->getUsername();
    $password = $this->getPassword();

    $query = "INSERT INTO accounts (email, username, password) VALUES ('$email', '$username', '$password')";

    if(parent::voerQueryUit($query) == false)
        {
            return false;
        }
        else
        {
            return true;
        }
}

public function getEmail() {
    return $this->email;
}

public function setEmail($email) {
    $this->email = $email;
}

public function getUsername() {
    return $this->username;
}

public function setUsername($username) {
    $this->username = $username;
}

public function getPassword()
{
    return $this->password;
}

public function setPassword($password) {
    $this->password = hash("sha256", $password);
}

}