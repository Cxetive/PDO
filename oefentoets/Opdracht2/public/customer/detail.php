
<?php
include("../../src/customer.php");

if(isset($_GET['id'])){
    $customer = new Customer();
    $customerData = $customer->getTicketById($_GET['id']);
}

?>

<h1>Dier: <?php echo $customerData[0]['naam'];?></h1>
<p>Prijs: <?php echo $customerData[0]['prijs']; ?></p>


