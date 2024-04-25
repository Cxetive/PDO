<form action="#" method="post">
    <label for="name">Naam:</label>
    <input type="text" name="name" />
    <br />
    <label for="headquarters">Hoofdkantoor:</label>
    <input type="text" name="headquarters" />
    <br />
    <label for="est">Estimate of existence:</label>
    <input type="text" name="est" />

    <input type="submit" name="saveCustomer"/>
</form>

<?php
include("../../src/publisher.php");

if(isset($_POST['saveCustomer'])){

    $newCustomer = new Publisher();
    $newCustomer->setName($_POST['name']);
    $newCustomer->setHeadquarters($_POST['headquarters']);
    $newCustomer->setEst($_POST['est']);
    
    if($newCustomer->savePublisher() != false){
        echo "Publisher is opgeslagen";
        header("Location: index.php");
    } else {
        echo "Klant is niet opgeslagen";
    }
}


