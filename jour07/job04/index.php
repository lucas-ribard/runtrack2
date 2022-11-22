<form action="" method="get">
    
        <label for="nb1">premier nombre :</label><br>
        <input type="text" name="nb1" id="nb1"><br>
        <br>
        <label for="operateur">opérateur :</label><br>
        <input type="text" name="operateur" id="operateur"><br>
        <br>
        <label for="nb2">deuxieme nombre :</label><br>
        <input type="text" name="nb2" id="nb2"><br>
        <br>
        <input type="submit" value="envoyer"><br>
    
</form>

<?php

$a = $_GET["nb1"];
$operation = $_GET["operateur"];
$b = $_GET["nb2"];

function calcul($a,$operation,$b){
    
    if ($operation === "+"){
        $resultat=$a+$b;
    }
    elseif ($operation === "-"){
        $resultat=$a-$b;
    }
    elseif ($operation === "*"){
        $resultat=$a*$b;
    }
    elseif ($operation === "/"){
        $resultat=$a/$b;
    }
    elseif ($operation === "%"){
        $resultat=$a%$b;
    }
    else{
        echo "opérateur invalide";
    }
    return($resultat);
}

$resultat=calcul($a,$operation,$b);
echo "<br>";
echo $resultat;
?>