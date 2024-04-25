<?php

// Verbinding maken met de database
$verbinding = new PDO("mysql:host=localhost;dbname=graafschapgames", 'root', '');

// Query voorbereiden en uitvoeren
$query = "SELECT * FROM customers";
$result = $verbinding->voerQueryUit($query);

foreach ($result as $row) {
     echo $row['id'] . "<br>";
}
?>
