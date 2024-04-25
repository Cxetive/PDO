
<form action="" method="post">
    <label for="">Old password</label>
    <input type="password" name="oldpass" id="">
    <label for="">New password</label>
    <input type="password" name="newpass" id="">
    <input type="submit" value="Reset password" name="resetSubmitted">
</form>

<?php
include("../src/account.php");
if(isset($_GET["id"]))
{
    
    if(isset($_POST["resetSubmitted"]))
    {
        $oldpass = hash("sha256", $_POST["oldpass"]);
        $newpass = hash("sha256", $_POST["newpass"]);

        $user = new Account();
        $account = $user->getUserById($_GET["id"]);

        echo "<br>";
        if($oldpass == $account[0]["password"]) {
            $user->updatePassword($newpass, $_GET["id"]);
            unset($_SESSION["userLoggedIn"]);
            header("Location: index.php");
        }
    
    }
    
}

?>