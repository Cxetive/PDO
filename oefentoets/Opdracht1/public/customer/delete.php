<?php
include("../../src/customer.php");

if(isset($_GET['customerID'])){
    $customer = new Customer();
    $customerDelete = $customer->deleteCustomer($_GET['customerID']);

    if($customerDelete != false){
        echo "Klant is verwijderd";
        header("Location: index.php");
    } else {
        echo "Klant is niet verwijderd";
    }
}

