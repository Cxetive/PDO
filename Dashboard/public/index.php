<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<style>
@import url("https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap");


* {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  font-family: "Hanken Grotesk";
}

body {
  background-color: #ecf2ff;
}

.container {
  width: 736px;
  height: 100vh;
  background-color: #ecf2ff;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0px auto;

  .login-form {
    width: 736px;
    height: 512px;
    background-image: linear-gradient(#7755FF, #2F2CE9);
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    border-radius: 50px;

    h1 {
        color: white;
    }

    .button {
        margin-top: 20px;
        background-color: white;
        border: none;
        width: 150px;
        height: 25px;
        border-radius: 12px;
        /* background-color: #303B59; */
        color: #2F2CE9;
        font-size: 16px;
    }

    .button:hover {
        background-color: #503cf4;
        border: 2px solid white;
        color: white;
    
    }
    input {
        margin-top: 20px;
        width: 150px;
        height: 25px;
        border-radius: 12px;
    }

    a {
        color: white;
        margin-top: 20px;
        text-decoration: none;

    }

    a:hover {
        color: black;
    }
  }
}

</style>
<body>
    <div class="container">
    <form action="#" method="post">
<div class="login-form">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="login">
        <a href="register.php">Register account</a>
        </div>
    </div>
    
        
        
    </form>

</body>
</html> 

<?php

include("../src/account.php");



if(isset($_POST["login"]))
{
    session_start();
    $user = new Account();
    $loginInformation = $user->getUser($_POST["email"]);
    if($loginInformation[0]["password"] == hash("sha256", $_POST["password"]))
    {
        $_SESSION['userLoggedIn'] = $loginInformation[0]["username"];
        echo "logged in";
        header("Location: userpage.php");
    } else {
        echo "incorrect login";
    }
}

?>