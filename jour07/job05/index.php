<form action="" method="get">
    
        <label for="str">votre phrase :</label><br>
        <input type="text" name="str" id="str"><br>
        <br>
        <label for="char">la lettre a compter :</label><br>
        <input type="text" name="char" id="char"><br>
        <br>
        
        <input type="submit" value="envoyer"><br>
    
</form>

<?php
$str = $_GET["str"];
$char = $_GET["char"];

function occurences($str,$char){

    $resultat=0;

    //boucle
    for ($i = 0; $i <= 100; $i++) {
        //recup la lettre
        $lettre = $str[$i];
        
        //test si la lettre est celle recherché
        
        if ($lettre===$char){
           //on ajoute 1 au compteur
           $resultat++;
        }
    }

    return($resultat);
}

$resultat=occurences($str,$char);
echo "<br>";
echo "Il y a $resultat fois la lettre \"$char\" dans \"$str\"";
?>

