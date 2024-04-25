<?php
include("../../src/customer.php");

$customer = new Customer();
$allCustomers = $customer->getAllTickets();

echo "<h1>Klanten</h1>";
echo "<a href=toevoegen.php>Toevoegen</a>";
echo "<table border='1'>
        <tr>
            <th>Naam</th>
            <th>Bekijken</th>
        </tr>";

        foreach ($allCustomers as $customer)
        {
            echo "<tr>";
                echo "<td>" . $customer['naam'] . "</td>";
                echo "<td><a href=detail.php?id=" . $customer['id'] . ">Bekijk</a></td>";
  
            echo "</tr>";
        }
echo "</table>";



