<form action="" method="get">
    
        <label for="str">Votre texte :</label><br>
        <input type="text" name="str" id="str"><br>
        <br>
                
        <input type="submit" value="envoyer"><br>
    
</form>

<?php

$str = $_GET["str"];

function leetSpeak($str){
    $leet = "48CD3F6HIJK1MNOPQR57UVWXYZ";
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJK1MNOPQRSTUVWXYZ';
    
    for ($i = 0; $i <= 2000; $i++) {
        //recup la lettre
        $lettre = $str[$i];

        //si lettre dans les 26 premieres lettres de l'alphabet
        for ($x = 0; $x <= 54; $x++) {
            $test=$alphabet[$x];
            if ($lettre == $test){
                //si maj
                if ($x >= 26 ){
                    $tempx=($x-26);
                }
                //si min
                elseif ($x <= 25){
                    $tempx=$x;
                }
               //ecrit dans str
                $str[$i]=$leet[$tempx];
            }
        } 
        //pourquoi il marche ici
        echo "<br> $str";
    }
    //pourquoi il marche PAS ici
    echo "<br>Miracle !<br> $str";
    return($str);
}

$str = leetSpeak($str);
echo "$str";
?>

