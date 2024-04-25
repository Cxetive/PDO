<?php
include("../../src/publisher.php");

if(isset($_GET['publisherId'])){
    $customer = new Publisher();
    $customerDelete = $customer->deletePublisher($_GET['publisherId']);

    if($customerDelete != false){
        echo "Publisher is verwijderd";
        header("Location: index.php");
    } else {
        echo "Publisher is niet verwijderd";
    }
}

