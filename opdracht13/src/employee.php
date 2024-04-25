<?php


include("database.php");


Class Employee extends Database 
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAllEmployeesDoetinchem()
    {
        $query = "SELECT * FROM employee WHERE city= 'Doetinchem'";
        return $this->database->voerQueryUit($query);
    }

    public function getAllEmployees()
    {
        $query = "SELECT * FROM employee WHERE city!= 'Doetinchem'";
        return $this->database->voerQueryUit($query);
    }
}