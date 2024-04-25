<?php
include("../../src/customer.php");

$customer = new Customer();
$allCustomers = $customer->getAllCustomers();

echo "<h1>Klanten</h1>";
echo "<a href=toevoegen.php>Toevoegen</a>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Soort</th>
            <th>leeftijd</th>
            <th>Bekijken</th>
            <th>Bewerken</th>
            <th>Verwijderen</th>
        </tr>";

        foreach ($allCustomers as $customer)
        {
            echo "<tr>";
                echo "<td>" . $customer['id'] . "</td>";
                echo "<td>" . $customer['naam'] . "</td>";
                echo "<td>" . $customer['soort'] . "</td>";
                echo "<td>" . $customer['leeftijd'] . "</td>";
                echo "<td><a href=detail.php?customerID=" . $customer['id'] . ">Bekijk</a></td>";
                echo "<td><a href=update.php?customerID=" . $customer['id'] . ">Bewerken</a></td>";
                echo "<td><a href=delete.php?customerID=" . $customer['id'] . ">Verwijderen</a></td>";  
            echo "</tr>";
        }
echo "</table>";



