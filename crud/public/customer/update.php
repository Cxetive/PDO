
<?php
include("../../src/customer.php");

if(isset($_GET['customerID'])){
    $customer = new Customer();
    $customerData = $customer->getCustomer($_GET['customerID']);
}

if(isset($_POST['updateCustomer'])){

    $customer = new Customer();
    $customer->setFirstName($_POST['firstName']);
    $customer->setLastName($_POST['lastName']);
    $customer->setGender($_POST['gender']);
    $customer->setAddressLine1($_POST['addressLine1']);
    $customer->setPostalCode($_POST['postalCode']);
    $customer->setCity($_POST['city']);
    $customer->setState($_POST['state']);
    $customer->setCountry($_POST['country']);
    $customer->setPhone($_POST['phone']);
    
    if($customer->updateCustomer($_GET['customerID']) != false){
        echo "Klant is bijgewerkt";
        header("Location: index.php");
    } else {
        echo "Klant is niet bijgewerkt";
    }
}

?>
<form action="#" method="post">
    <label for="firstName">Voornaam:</label>
    <input type="text" name="firstName" value="<?php echo $customerData[0]['firstName']; ?>"/>
    <br />
    <label for="lastName">Achternaam:</label>
    <input type="text" name="lastName" value="<?php echo $customerData[0]['lastName']; ?>"/>
    <br />
    <label for="gender">Geslacht:</label>
    <input type="radio" name="gender" value="M" <?php if($customerData[0]['gender'] == 'M'){ echo 'checked';} ?>/>M
    <input type="radio" name="gender" value="V" <?php if($customerData[0]['gender'] == 'v'){ echo 'checked';} ?>/>V
    <br />
    <label for="addressLine1">Adres:</label>
    <input type="text" name="addressLine1" value="<?php echo $customerData[0]['addressLine1']; ?>"/>
    <br />
    <label for="postalCode">Postcode:</label>
    <input type="text" name="postalCode" value="<?php echo $customerData[0]['postalCode']; ?>"/>
    <br />
    <label for="city">Plaats:</label>
    <input type="text" name="city" value="<?php echo $customerData[0]['city']; ?>" />
    <br />
    <label for="state">Provincie:</label>
    <input type="text" name="state" value="<?php echo $customerData[0]['state']; ?>" />
    <br />
    <label for="country">Land:</label>
    <input type="text" name="country" value="<?php echo $customerData[0]['country']; ?>" />
    <br />
    <label for="phone">Telefoon:</label>
    <input type="text" name="phone" value="<?php echo $customerData[0]['phone']; ?>" />
    <br />

    <input type="submit" name="updateCustomer"/>
</form>


