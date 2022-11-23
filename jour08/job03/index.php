<form action="" method="post">
    
        <label for="prenom">Votre Prenom :</label><br>
        <input type="text" name="prenom" id="prenom">              
        <input type="submit" value="envoyer"><br>
        <input type = 'submit' name='reset' value = 'reset'>
    
</form>


<?php

session_start();
//ajoute le prenom dans l'array
array_push($_SESSION['lstprenom'],$_POST['prenom']);

//si reset
if (isset ($_POST['reset'])){
    $_SESSION['lstprenom']=array();
}
foreach ($_SESSION['lstprenom'] as  $value) {
    echo "&ensp;&bull;$value<br>";
}

?>