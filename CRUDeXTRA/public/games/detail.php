
<?php
include("../../src/games.php");

if(isset($_GET['gameId'])){
    $customer = new Game();
    $customerData = $customer->getGame($_GET['gameId']);
}

?>

<h1>Game: <?php echo $customerData[0]['gameId'] . " " . $customerData[0]['gameName']; ?></h1>
<p>Platform: <?php echo $customerData[0]['platform']; ?></p>
<p>Price: <?php echo $customerData[0]['price']; ?></p>
<a href="update.php?gameId=<?php echo $customerData[0]['gameId']; ?>">Bewerken</a></br>
<a href="delete.php?gameId=<?php echo $customerData[0]['gameId']; ?>">Verwijderen</a>


