
<?php
include("../../src/customer.php");

if(isset($_GET['customerID'])){
    $customer = new Customer();
    $customerData = $customer->getCustomer($_GET['customerID']);
}

?>

<h1>Dier: <?php echo $customerData[0]['naam'];?></h1>
<p>Soort: <?php echo $customerData[0]['soort']; ?></p>
<p>Leeftijd: <?php echo $customerData[0]['leeftijd']; ?></p>
<a href="update.php?customerID=<?php echo $customerData[0]['id']; ?>">Bewerken</a></br>
<a href="delete.php?customerID=<?php echo $customerData[0]['id']; ?>">Verwijderen</a>


