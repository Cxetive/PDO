<form action="#" method="post">
    <label for="firstName">Voornaam:</label>
    <input type="text" name="firstName" />
    <br />
    <label for="lastName">Achternaam:</label>
    <input type="text" name="lastName" />
    <br />
    <label for="gender">Geslacht:</label>
    <input type="radio" name="gender" value="M"/>M
    <input type="radio" name="gender" value="V"/>V
    <br />
    <label for="addressLine1">Adres:</label>
    <input type="text" name="addressLine1" />
    <br />
    <label for="postalCode">Postcode:</label>
    <input type="text" name="postalCode" />
    <br />
    <label for="city">Plaats:</label>
    <input type="text" name="city" />
    <br />
    <label for="state">Provincie:</label>
    <input type="text" name="state" />
    <br />
    <label for="country">Land:</label>
    <input type="text" name="country" />
    <br />
    <label for="phone">Telefoon:</label>
    <input type="text" name="phone" />
    <br />

    <input type="submit" name="saveCustomer"/>
</form>

<?php
include("../../src/customer.php");

if(isset($_POST['saveCustomer'])){

    $newCustomer = new Customer();
    $newCustomer->setFirstName($_POST['firstName']);
    $newCustomer->setLastName($_POST['lastName']);
    $newCustomer->setGender($_POST['gender']);
    $newCustomer->setAddressLine1($_POST['addressLine1']);
    $newCustomer->setPostalCode($_POST['postalCode']);
    $newCustomer->setCity($_POST['city']);
    $newCustomer->setState($_POST['state']);
    $newCustomer->setCountry($_POST['country']);
    $newCustomer->setPhone($_POST['phone']);
    
    if($newCustomer->saveCustomer() != false){
        echo "Klant is opgeslagen";
        header("Location: index.php");
    } else {
        echo "Klant is niet opgeslagen";
    }
}


