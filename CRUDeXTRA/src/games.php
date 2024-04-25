<?php
include_once('database.php');

class Game extends Database
{
    private $orderId;
    private $gameName;
    private $platform;
    private $price;   

    // Get all customers
    public function getAllGames()
    {
        $query = "SELECT * FROM games";
        return parent::voerQueryUit($query);
    }

    // Get a specific customer
    public function getGame($gameId)
    {
        $query = "SELECT * FROM games WHERE gameId = $gameId";
        return parent::voerQueryUit($query);
    }

    // Save a new customer
    public function saveGame()
    {
        // Check if all required fields are filled in
        if(
            $this->getGameName() == "" || $this->getPlatform() == "" 
            || $this->getPrice() == "" 
        ){
            return false;
        }


        $name = $this->getGameName();
        $headquarters = $this->getPlatform();
        $est = $this->getPrice();

        $query = "INSERT INTO games (gameName, platform, price) VALUES ('$name', '$headquarters', '$est')";
        
        // Return true if the query is successful, else return false
        if(parent::voerQueryUit($query) == false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

   
    // Update a customer
    public function UpdateGame($gameId)
    {
        // Check if all required fields are filled in
        if(
            $this->getGameName() == "" || $this->getPlatform() == "" 
            || $this->getPrice() == "" 
        ){
            return false;
        }


        
        $name = $this->getGameName();
        $headquarters = $this->getPlatform();
        $est = $this->getPrice();

        $query = "UPDATE games 
           SET gameName = '$name', platform = '$headquarters', price = $est 
           WHERE gameId = `$gameId`";
        // Return true if the query is successful, else return false
        if(parent::voerQueryUit($query) == false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    // Delete a customer
    public function deleteGame($customerId)
    {
        $query = "DELETE FROM games WHERE gameId = $customerId";
        // Return true if the query is successful, else return false
        if(parent::voerQueryUit($query) == false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    // Getters and setters
    public function getGameName() {
        return $this->gameName;
    }

    public function getPlatform() {
        return $this->platform;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getGameId() {
        return $this->gameId;
    }

    public function setGameName($name) {
        $this->gameName = $name;
    }

    public function setPlatform($headquarters) {
        $this->platform = $headquarters;
    }

    public function setPrice($est) {
        $this->price = $est;
    }
    
}


