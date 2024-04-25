
<?php
include("../src/account.php");

if(isset($_GET['id'])){
$user = new Account();
$account = $user->getUserById($_GET['id']);
}

?>

<h1>User: <?php echo $account[0]['id'] . " " . $account[0]['username']; ?></h1>
<p>Password: <?php echo $account[0]['password']; ?></p>
<a href="update.php?customerID=<?php echo $account[0]['customerId']; ?>">Bewerken</a></br>
<a href="delete.php?customerID=<?php echo $account[0]['customerId']; ?>">Verwijderen</a>


