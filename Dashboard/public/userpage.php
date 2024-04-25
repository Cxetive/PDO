<?php
include("../src/account.php");

session_start();

if(isset($_SESSION["userLoggedIn"])) {

    echo "<h1>Welcome " . $_SESSION['userLoggedIn'] . "</h1>";

    $user = new Account();
    $account = $user->getUserByName($_SESSION["userLoggedIn"]);
    $userId = $account[0]["id"];
    $isBeheer = $account[0]["beheer"];

    echo "<a href=passwordreset.php?id=$userId>Change password</a>";

    if($isBeheer == 1) {
        echo "<br>";
        echo "<a href=viewallusers.php>Beheer Functies</a>";
    }
    ?>


    <form action="" method="post">
    Logout: <input type="submit" name="logout">
    </form>
    <?php
    
    if(isset($_POST["logout"])) {
        unset($_SESSION["userLoggedIn"]);
        header("Location: index.php");
    }

    
} else {
    echo "<h1>You no longer have access to this page, please login in order to continue.</h1>";
}


?>
