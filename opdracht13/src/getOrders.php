<?php

include("../src/orders.php");

$orders = new Orders();
$alleOrders = $orders->getAllOrders();


// echo "<pre>";
// print_r($alleOrders);
// echo "</pre>";


foreach($alleOrders as $orders)
{
    echo "Order ID: " . $orders['orderId'] . " Customer Id: " . $orders['customerId'] . " Quantity: " . $orders['totalQuantityOrdered'] . " Status: " . $orders["status"] . " Comments: " . $orders["comments"] . "<br>";
}

?>