<?php


include("database.php");


Class orderDetails extends Database 
{


    public function getAllGenres($orderId)
    {
        $query = "SELECT * from orderdetails
        join games on orderdetails.gameId = games.gameId
        WHERE orderId = '$orderId'
        order by orderLineNumber";
        return parent::voerQueryUit($query);
    }
}