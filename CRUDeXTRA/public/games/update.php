
<?php
include("../../src/games.php");

if(isset($_GET['gameId'])){
    $customer = new Game();
    $customerData = $customer->getGame($_GET['gameId']);
}

if(isset($_POST['updateCustomer'])){

    $customer = new Game();
    $customer->setGameName($_POST['gameName']);
    $customer->setPlatform($_POST['platform']);
    $customer->setPrice($_POST['price']);

    
    if($customer->updateGame($_GET['gameId']) != false){
        echo "Publisher is bijgewerkt";
        header("Location: index.php");
    } else {
        echo "Publisher is niet bijgewerkt";
    }
}

?>
<form action="#" method="post">
    <label for="firstName">Naam:</label>
    <input type="text" name="gameName" value="<?php echo $customerData[0]['gameName']; ?>"/>
    <br />
    <label for="headquarters">Platform:</label>
    <input type="text" name="platform" value="<?php echo $customerData[0]['platform']; ?>"/>
    <br />
    <label for="postalCode">Prijs:</label>
    <input type="text" name="price" value="<?php echo $customerData[0]['price']; ?>"/>
  

    <input type="submit" name="updateCustomer"/>
</form>


