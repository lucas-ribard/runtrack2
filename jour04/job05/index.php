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

    if(isset($_POST["username"])and isset($_POST["password"])){
        if ($_POST["username"]==="John" and $_POST["password"]==="Rambo"){
            echo "C'est pas ma guerre";
        }
        else {
            echo "Votre pire cauchemar";
        }

    }
    else {
        echo "";
    }

?>