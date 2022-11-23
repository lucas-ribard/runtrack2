<form action="" method=""get>
<input type = 'submit' value = 'Reload page'>  
<input type = 'submit' name='reset' value = 'reset compteur'>
    
</form>

<?php

session_start();
//ajoute 1 a chaque visite
$_SESSION['nbvisit'] += 1;
//si reset remet a 1
if (isset ($_GET['reset'])){
    $_SESSION['nbvisit']=1;
}
echo "il y a eu ",$_SESSION['nbvisit']," visites";

?>