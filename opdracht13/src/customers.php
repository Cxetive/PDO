<?php


include("database.php");


Class Customer extends Database 
{
    public function getAllCustomers()
    {
        $query = "SELECT * FROM customers";
        return parent::voerQueryUit($query);
    }

    public function getCustomerOnLastName($zoekterm)
    {
        $query = "SELECT * FROM customers WHERE lastName like '%$zoekterm%'";
        return parent::voerQueryUit($query);
    }

    public function getCustomerOnLastAndFirstName($zoekterm)
    {
        $query = "SELECT * FROM customers WHERE firstName like '%$zoekterm%' OR lastName like '%$zoekterm%'";
        return parent::voerQueryUit($query);
    }

    public function getPostalAndPhone($zoekterm)
    {
        $query = "SELECT * FROM customers WHERE postalCode like '%$zoekterm%' OR phone like '%$zoekterm%'";
        return parent::voerQueryUit($query);
    }

}