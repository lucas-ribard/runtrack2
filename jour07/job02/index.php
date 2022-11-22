<!-- checkbox -->
<form method='POST' action=''>
    fait t'il Jour ?
    <input type='checkbox' name='case' value='on'>
    <br>
    <input type="submit" value="envoyer"><br>
</form>

<?php
//fonction bonjour
function Bonjour($jour){
    if ($jour===true)
        echo "Bonjour";
    else {
        echo "Bonsoir";}
    return;
}

//check etat du bouton
$case = $_POST["case"];
if(isset($case)){
    $jour=true;
}
else{
    $jour=false;
}

//apelle la fonction
Bonjour($jour);
?>