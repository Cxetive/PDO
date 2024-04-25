<?php
include_once('database.php');

class Publisher extends Database
{
    private $publisherId;
    private $name;
    private $headquarters;
    private $est;

    // Get all customers
    public function getAllPublishers()
    {
        $query = "SELECT * FROM publisher";
        return parent::voerQueryUit($query);
    }

    // Get a specific customer
    public function getPublisher($publisherId)
    {
        $query = "SELECT * FROM publisher WHERE publisherId = $publisherId";
        return parent::voerQueryUit($query);
    }

    // Save a new customer
    public function savePublisher()
    {
        // Check if all required fields are filled in
        if(
            $this->getName() == "" || $this->getHeadquarters() == "" 
            || $this->getEst() == "" 
        ){
            return false;
        }


        $name = $this->getName();
        $headquarters = $this->getHeadquarters();
        $est = $this->getEst();

        $query = "INSERT INTO publisher (name, headquarters, est) VALUES ('$name', '$headquarters', '$est')";
        
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
    public function updatePublisher($publisherId)
    {
        // Check if all required fields are filled in
        if(
            $this->getName() == "" || $this->getHeadquarters() == "" 
            || $this->getEst() == "" 
        ){
            return false;
        }

        $name = $this->getName();
        $headquarters = $this->getHeadquarters();
        $est = $this->getEst();

        $query = "UPDATE publisher 
           SET name = '$name', headquarters = '$headquarters', est = $est 
           WHERE publisherId = $publisherId";
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
    public function deletePublisher($customerId)
    {
        $query = "DELETE FROM publisher WHERE publisherId = $customerId";
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
    public function getName() {
        return $this->name;
    }

    public function getHeadquarters() {
        return $this->headquarters;
    }

    public function getEst() {
        return $this->est;
    }

    public function getPublisherId() {
        return $this->publisherId;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setHeadquarters($headquarters) {
        $this->headquarters = $headquarters;
    }

    public function setEst($est) {
        $this->est = $est;
    }
    
}


