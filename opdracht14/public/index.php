

<table border="2px solid">
    <thead>
        <tr>
            <th>order</th>
            <th>Uitgever:</th>
            <th>Bekijken</th>
            <th>Status</th>
        </tr>

    </thead>


<tbody>

<?php

include("../src/orders.php");


$orders = new Orders();
$getorders = $orders->getAllOrders();

foreach($getorders as $order)
{
    echo "<tr>";
    echo "<td>" . $order['orderId'] . "</td>";
    echo "<td>" . $order["firstName"] . " " . $order["lastName"] . "</td>";
    echo "<td>" . $order["status"] . "</td>";
    echo "<td>" . "<a href=orderdetailpagina.php?id=" . $order["orderId"] . ">" . "Bekijk" .     "</td>";
    echo "</tr>";
}
?>

</tbody>
</table>