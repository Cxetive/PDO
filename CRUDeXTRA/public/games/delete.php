<?php
include("../../src/games.php");

if(isset($_GET['gameId'])){
    $customer = new Game();
    $customerDelete = $customer->deleteGame($_GET['gameId']);

    if($customerDelete != false){
        echo "Game is verwijderd";
        header("Location: index.php");
    } else {
        echo "Game is niet verwijderd";
    }
}

