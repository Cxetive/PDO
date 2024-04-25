<form action="#" method="post">
    <label for="naam">Naam:</label>
    <input type="text" name="naam" />
    <br />
    <label for="soort">Soort:</label>
    <input type="text" name="soort" />
    <br />
    <label for="leeftijd">leeftijd:</label>
    <input type="text" name="leeftijd" />
    <br />
 

    <input type="submit" name="saveCustomer"/>
</form>

<?php
include("../../src/customer.php");

if(isset($_POST['saveCustomer'])){

    $newCustomer = new Customer();
    $newCustomer->setNaam($_POST['naam']);
    $newCustomer->setSoort($_POST['soort']);
    $newCustomer->setLeeftijd($_POST['leeftijd']);
    
    if($newCustomer->saveCustomer() != false){
        echo "Klant is opgeslagen";
        header("Location: index.php");
    } else {
        echo "Klant is niet opgeslagen";
    }
}


