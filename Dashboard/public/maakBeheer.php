<?php


include("../src/account.php");

if(isset($_GET['id'])){
    $accounts = new Account();
    $account = $accounts->maakBeheer($_GET['id']);

    if($account != false){
        echo "Persoon is beheer gemaakt.";
        header("Location: viewallusers.php");
    } else {
        echo "Persoon kon niet beheerder gemaakt worden.";
    }
}




?>
