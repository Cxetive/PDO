<?php
include("../../src/games.php");

$employee = new Game();
$allCustomers = $employee->getAllGames();

echo "<h1>Games</h1>";
echo "<a href=toevoegen.php>Toevoegen</a>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Platform</th>
            <th>Prijs</th>
            <th>Bekijken</th>
            <th>Bewerken</th>
            <th>Verwijderen</th>
        </tr>";

        foreach ($allCustomers as $customer)
        {
            echo "<tr>";
                echo "<td>" . $customer['gameId'] . "</td>";
                echo "<td>" . $customer['gameName'] . "</td>";
                echo "<td>" . $customer["platform"] . "</td>";
                echo "<td>" . $customer['price'] . "</td>";
                echo "<td><a href=detail.php?gameId=" . $customer['gameId'] . ">Bekijk</a></td>";
                echo "<td><a href=update.php?gameId=" . $customer['gameId'] . ">Bewerken</a></td>";
                echo "<td><a href=delete.php?gameId=" . $customer['gameId'] . ">Verwijderen</a></td>";  
            echo "</tr>";
        }
echo "</table>";



