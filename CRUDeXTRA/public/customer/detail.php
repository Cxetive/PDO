
<?php
include("../../src/employee.php");

if(isset($_GET['customerID'])){
    $customer = new Customer();
    $customerData = $customer->getCustomer($_GET['customerID']);
}

?>

<h1>User: <?php echo $customerData[0]['firstName'] . " " . $customerData[0]['lastName']; ?></h1>
<p>Password (Hashed): <?php echo $customerData[0]['gender']; ?></p>
<a href="update.php?customerID=<?php echo $customerData[0]['customerId']; ?>">Bewerken</a></br>
<a href="delete.php?customerID=<?php echo $customerData[0]['customerId']; ?>">Verwijderen</a>


