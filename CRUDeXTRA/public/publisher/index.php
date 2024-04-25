<?php
include("../../src/publisher.php");

$employee = new Publisher();
$allCustomers = $employee->getAllPublishers();

echo "<h1>Employees</h1>";
echo "<a href=toevoegen.php>Toevoegen</a>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Hoofdkwartier</th>
            <th>Estimate</th>
            <th>Bekijken</th>
            <th>Bewerken</th>
            <th>Verwijderen</th>
        </tr>";

        foreach ($allCustomers as $customer)
        {
            echo "<tr>";
                echo "<td>" . $customer['publisherId'] . "</td>";
                echo "<td>" . $customer['name'] . "</td>";
                echo "<td>" . $customer["headquarters"] . "</td>";
                echo "<td>" . $customer['est'] . "</td>";
                echo "<td><a href=detail.php?publisherId=" . $customer['publisherId'] . ">Bekijk</a></td>";
                echo "<td><a href=update.php?publisherId=" . $customer['publisherId'] . ">Bewerken</a></td>";
                echo "<td><a href=delete.php?publisherId=" . $customer['publisherId'] . ">Verwijderen</a></td>";  
            echo "</tr>";
        }
echo "</table>";



