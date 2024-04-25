<?php
include_once('database.php');

class Customer extends Database
{
    private $id;
    private $naam;
    private $soort;
    private $leeftijd;

    // Get all customers
    public function getAllCustomers()
    {
        $query = "SELECT * FROM dieren";
        return parent::voerQueryUit($query);
    }

    // Get a specific customer
    public function getCustomer($customerId)
    {
        $query = "SELECT * FROM dieren WHERE id = $customerId";
        return parent::voerQueryUit($query);
    }

    // Save a new customer
    public function saveCustomer()
    {
        // Check if all required fields are filled in
        if(
            $this->getNaam() == "" || $this->getSoort() == "" || $this->getLeeftijd() == ""
        ){
            return false;
        }

        $naam = $this->getNaam();
        $soort = $this->getSoort();
        $leeftijd = $this->getLeeftijd();

        $query = "INSERT INTO dieren (naam, soort, leeftijd) VALUES ('$naam', '$soort', '$leeftijd');";
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
    public function updateCustomer($customerId)
    {
        // Check if all required fields are filled in
        if(
            $this->getNaam() == "" || $this->getSoort() == "" || $this->getLeeftijd() == ""
        ){
            return false;
        }

        $naam = $this->getNaam();
        $soort = $this->getSoort();
        $leeftijd = $this->getLeeftijd();

        $query = "UPDATE dieren 
        SET naam = $naam, 
            soort = $soort, 
            leeftijd = $leeftijd
        WHERE id = $id;";
        
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
    public function deleteCustomer($customerId)
    {
        $query = "DELETE FROM dieren WHERE id = $customerId";
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
    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    public function getNaam()
    {
        return $this->naam;
    }

    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    public function getSoort()
    {
        return $this->soort;
    }

    public function setSoort($soort)
    {
        $this->soort = $soort;
    }

    public function getLeeftijd()
    {
        return $this->leeftijd;
    }

    public function setLeeftijd($leeftijd)
    {
        $this->leeftijd = $leeftijd;
    }
    
}


