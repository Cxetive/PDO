<?php
include("../../src/employee.php");

$employee = new Employee();
$allCustomers = $employee->getAllCustomers();

echo "<h1>Employees</h1>";
echo "<a href=toevoegen.php>Toevoegen</a>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Adres</th>
            <th>Telefoon</th>
            <th>Bekijken</th>
            <th>Bewerken</th>
            <th>Verwijderen</th>
        </tr>";

        foreach ($allCustomers as $customer)
        {
            echo "<tr>";
                echo "<td>" . $customer['employeeId'] . "</td>";
                echo "<td>" . $customer['firstName'] . " " . " " . $customer["prefix"] . "  ". $customer['lastName'] . "</td>";
                echo "<td>" . $customer['address'] . " " . $customer['zipcode'] . " " . $customer['city'] . "</td>";
                echo "<td>" . $customer['phone'] . "</td>";
                echo "<td><a href=detail.php?employeeId=" . $customer['employeeId'] . ">Bekijk</a></td>";
                echo "<td><a href=update.php?employeeId=" . $customer['employeeId'] . ">Bewerken</a></td>";
                echo "<td><a href=delete.php?employeeId=" . $customer['employeeId'] . ">Verwijderen</a></td>";  
            echo "</tr>";
        }
echo "</table>";



