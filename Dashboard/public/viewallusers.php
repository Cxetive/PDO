<?php
include("../src/account.php");

session_start();

$user = new Account();
$accounts = $user->getAllUsers();

echo "<h1>Users</h1>";
echo "<a href=toevoegen.php>Toevoegen</a>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Username</th>
            <th>Bekijken</th>
            <th>Bewerken</th>
            <th>Verwijderen</th>
            <th>Beheer</th>
        </tr>";

        foreach ($accounts as $account)
        {
            echo "<tr>";
                echo "<td>" . $account['id'] . "</td>";
                echo "<td>" . $account['email'] . "</td>";
                echo "<td>" . $account['username']. "</td>";
                echo "<td><a href=detail.php?id=" . $account['id'] . ">Bekijk</a></td>";
                echo "<td><a href=update.php?id=" . $account['id'] . ">Bewerken</a></td>";
                echo "<td><a href=delete.php?id=" . $account['id'] . ">Verwijderen</a></td>";  
                if($_SESSION["userLoggedIn"] != $account["username"]) {
                    if($account["beheer"] == 1) {
                        echo "<td><a href=verwijderBeheer.php?id=" .$account["id"] . "> Verwijder Beheer</a>" .  "</td>";
                    } else {
                        echo "<td><a href=maakBeheer.php?id=" .$account["id"] . "> Maak Beheer</a>" .  "</td>";
                    }
                }
                
            echo "</tr>";
        }
echo "</table>";
