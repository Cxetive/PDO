
<?php
include("../../src/publisher.php");

if(isset($_GET['publisherId'])){
    $customer = new Publisher();
    $customerData = $customer->getPublisher($_GET['publisherId']);
}

if(isset($_POST['updateCustomer'])){

    $customer = new Publisher();
    $customer->setName($_POST['name']);
    $customer->setHeadquarters($_POST['headquarters']);
    $customer->setEst($_POST['est']);

    
    if($customer->updatePublisher($_GET['publisherId']) != false){
        echo "Publisher is bijgewerkt";
        header("Location: index.php");
    } else {
        echo "Publisher is niet bijgewerkt";
    }
}

?>
<form action="#" method="post">
    <label for="firstName">Naam:</label>
    <input type="text" name="name" value="<?php echo $customerData[0]['name']; ?>"/>
    <br />
    <label for="headquarters">Hoofdkwartier:</label>
    <input type="text" name="headquarters" value="<?php echo $customerData[0]['headquarters']; ?>"/>
    <br />
    <label for="postalCode">Est:</label>
    <input type="text" name="est" value="<?php echo $customerData[0]['est']; ?>"/>
  

    <input type="submit" name="updateCustomer"/>
</form>


