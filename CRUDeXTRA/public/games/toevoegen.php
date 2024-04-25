<form action="#" method="post">
    <label for="game">Naam:</label>
    <input type="text" name="game" />
    <br />
    <label for="platform">platform:</label>
    <input type="text" name="platform" />
    <br />
    <label for="price">Prijs:</label>
    <input type="text" name="price" />

    <input type="submit" name="saveCustomer"/>
</form>

<?php
include("../../src/games.php");

if(isset($_POST['saveCustomer'])){

    $newCustomer = new Game();
    $newCustomer->setGameName($_POST['game']);
    $newCustomer->setPlatform($_POST['platform']);
    $newCustomer->setPrice($_POST['price']);
    
    if($newCustomer->saveGame() != false){
        echo "Publisher is opgeslagen";
        header("Location: index.php");
    } else {
        echo "Klant is niet opgeslagen";
    }
}


