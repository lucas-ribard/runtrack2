<?php
$str = "Dans L'espace, Personne ne vous entend crier";
echo "$str<br>";
//compteur mis a 0
$nbchar=0;

//boucle
for ($i = 1; $i <= 100; $i++) {
    //recup la lettre
    $lettre = $str[$i];
    //si la lettre existe
    if (isset($lettre)){
        //on ajoute 1 au compteur
        $nbchar++;
    }
    //si elle est null on met fin a la boucle
    else{
        break;
    }
}
//la bonne réponse est 44
echo "Il y a $nbchar charactères dans cette phrase";
?>