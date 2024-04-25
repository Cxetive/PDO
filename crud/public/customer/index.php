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
            <th>Geslacht</th>
            <th>Adres</th>
            <th>Telefoon</th>
            <th>Bekijken</th>
            <th>Bewerken</th>
            <th>Verwijderen</th>
        </tr>";

        foreach ($allCustomers as $customer)
        {
            echo "<tr>";
                echo "<td>" . $customer['customerId'] . "</td>";
                echo "<td>" . $customer['firstName'] . " " . $customer['lastName'] . "</td>";
                echo "<td>" . $customer['gender'] . "</td>";
                echo "<td>" . $customer['addressLine1'] . " " . $customer['postalCode'] . " " . $customer['city'] . " " . $customer['state'] . " " . $customer['country'] . "</td>";
                echo "<td>" . $customer['phone'] . "</td>";
                echo "<td><a href=detail.php?customerID=" . $customer['customerId'] . ">Bekijk</a></td>";
                echo "<td><a href=update.php?customerID=" . $customer['customerId'] . ">Bewerken</a></td>";
                echo "<td><a href=delete.php?customerID=" . $customer['customerId'] . ">Verwijderen</a></td>";  
            echo "</tr>";
        }
echo "</table>";



