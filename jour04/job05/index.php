<form action="" method="post">
    
        <label for="username">Username :</label><br>
        <input type="text" name="username" id="username"><br>
        <br>
        <label for="password">Password :</label><br>
        <input type="text" name="password" id="password"><br>
        <br>
        
        <input type="submit" value="Login"><br>
    
</form>

<?php

$username = $_POST["username"];
$password = $_POST["password"];


if(empty($_POST["username"])and empty($_POST["password"])){
    if ($username==="John" and $password==="Rambo"){
        echo "C'est pas ma guerre";
    }

}
echo "Votre pire cauchemar";
?>