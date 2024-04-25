<?php

include("../src/orderDetails.php");

if(isset($_GET['id']))
{
    $order = new orderDetails();
    $zoeken = $order->getAllGenres($_GET['id']);
    $totaleKosten = 0;
    
    echo "Gegevens van deze order: <br><br><br>";

    foreach($zoeken as $order)
    {
        $totaleKosten += $order['quantityOrdered'] * $order["priceEach"];
        echo $order['quantityOrdered'] .  " stuks: " . $order["gameName"] . " €" . $order["priceEach"] .  " is totaal: " .  $order["priceEach"] * $order['quantityOrdered'] . "<br>" ;
    }
    echo "<br><br><br>";
    echo "Totaal order bedrag: " . $totaleKosten;
}
else
{
    echo "Dit order Id bestaat niet.";
}

?>