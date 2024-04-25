
<?php
include("../../src/customer.php");

if(isset($_GET['customerID'])){
    $customer = new Customer();
    $customerData = $customer->getCustomer($_GET['customerID']);
}

?>

<h1>Klant: <?php echo $customerData[0]['firstName'] . " " . $customerData[0]['lastName']; ?></h1>
<p>Geslacht: <?php echo $customerData[0]['gender']; ?></p>
<p>Adres: <?php echo $customerData[0]['addressLine1'] . " " . $customerData[0]['postalCode'] . " " . $customerData[0]['city'] . " " . $customerData[0]['state'] . " " . $customerData[0]['country'] ; ?></p>
<p>Telefoon: <?php echo $customerData[0]['phone']; ?></p>
<a href="update.php?customerID=<?php echo $customerData[0]['customerId']; ?>">Bewerken</a></br>
<a href="delete.php?customerID=<?php echo $customerData[0]['customerId']; ?>">Verwijderen</a>


