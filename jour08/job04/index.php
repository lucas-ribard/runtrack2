<!DOCTYPE html>
<?php 
//si cookie 
if (isset($_COOKIE['user'])){
    //bonjour user
    echo "Bonjour ", $_COOKIE['user']," !";

    //bouton deco
    ?>

    <form action="" method="get">           
        <input type="submit" name ="deco" value="deco"><br>
    </form>
    <?php
    //quand préssé vide le cookie
    if (isset ($_GET['deco'])){
        setcookie("user", "");
    } 

}
//sinon
else{
   
    //formulaire
    ?>
    <form action="" method="post">
        <label for="username">Username :</label><br>
        <input type="text" name="username" id="username"> <br>            
        <input type="submit" value="connexion"><br>
    </form>
    <?php
     //ecrit res dans cookie
     setcookie("user", $_POST['username']);
}
?>