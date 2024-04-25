<form action="#" method="post">
    <label for="game">Email:</label>
    <input type="email" name="email" />
    <br />
    <label for="price">Username:</label>
    <input type="text" name="username" />
    <br />
    <label for="platform">Password:</label>
    <input type="password" name="password" />
    
    

    <input type="submit" name="regristeerAccount"/>
</form>


<?php
include("../src/account.php");

if(isset($_POST['regristeerAccount'])) 
{

    $newUser = new Account();
    $newUser->setEmail($_POST["email"]);
    $newUser->setUsername($_POST["username"]);
    $newUser->setPassword($_POST["password"]);

    if($newUser->registerUser() != false){
        echo "Publisher is opgeslagen";
        header("Location: index.php");
    } else {
        echo "Klant is niet opgeslagen";
    }
}



?>