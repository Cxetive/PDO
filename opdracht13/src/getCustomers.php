<?php


include("../src/customers.php");

$customer = new Customer();
$alleCustomers = $customer->getAllCustomers();

// echo "<pre>";
// print_r($alleCustomers);
// echo "</pre>";


?>