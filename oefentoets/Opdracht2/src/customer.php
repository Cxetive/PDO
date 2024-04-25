<?php
include_once('database.php');

class Customer extends Database
{
    private $id;
    private $naam;
    private $soort;
    private $leeftijd;

    // Get all customers
    public function getAllTickets()
    {
        $query = "SELECT * FROM tickets";
        return parent::voerQueryUit($query);
    }

    // Get a specific customer
    public function getTicketById($customerId)
    {
        $query = "SELECT * FROM tickets WHERE id = $customerId";
        return parent::voerQueryUit($query);
    }


   
}


