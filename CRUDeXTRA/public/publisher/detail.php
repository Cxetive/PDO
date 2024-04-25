
<?php
include("../../src/publisher.php");

if(isset($_GET['publisherId'])){
    $customer = new Publisher();
    $customerData = $customer->getPublisher($_GET['publisherId']);
}

?>

<h1>Klant: <?php echo $customerData[0]['publisherId'] . " " . $customerData[0]['name']; ?></h1>
<p>Hoofdkantoor: <?php echo $customerData[0]['headquarters']; ?></p>
<p>Est: <?php echo $customerData[0]['est']; ?></p>
<a href="update.php?customerID=<?php echo $customerData[0]['customerId']; ?>">Bewerken</a></br>
<a href="delete.php?customerID=<?php echo $customerData[0]['customerId']; ?>">Verwijderen</a>


