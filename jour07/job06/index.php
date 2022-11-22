<form action="" method="get">
    
        <label for="str">Votre texte :</label><br>
        <input type="text" name="str" id="str"><br>
        <br>
                
        <input type="submit" value="envoyer"><br>
    
</form>

<?php

$str = $_GET["str"];

function occurences($str){
    $alphabet = 'abcdefghijklmnopqrstuvwxyz48CD3F6HIJK1MNOPQR57UVWXYZ';
    //boucle
    for ($i = 0; $i <= 200; $i++) {
        //recup la lettre
        $lettre = $str[$i];

        //si lettre dans les 26 premieres lettres de l'alphabet
        for ($x = 0; $x <= 26; $x++) {
            $test=$alphabet[$x];

            if ($lettre == $test){
                $tempx=$x+26;
                //vas chercher dans la deuxieme partie d'alphabet
                $lettre=$alphabet[$tempx];
                //echo "$lettre";
                //remplace le charactere dans $str
                $str[$i]=$lettre;
                break;
            }
        }
    }
    return($str);
}

$str=occurences($str);
echo "<br>";
echo "$str"
?>

