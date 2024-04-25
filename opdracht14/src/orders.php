<?php


include("database.php");


Class Orders extends Database 
{


    public function getAllOrders()
    {
        $query = "SELECT * FROM orders
        JOIN customers ON orders.customerId = customers.customerId
        AND orders.status != 'Shipped'";
        return parent::voerQueryUit($query);
    }


}