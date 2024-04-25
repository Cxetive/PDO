<?php


include("database.php");


Class Orders extends Database 
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAllOrders()
    {
        $query = "SELECT * FROM orders";
        return $this->database->voerQueryUit($query);
    }


}