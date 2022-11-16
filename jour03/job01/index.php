<?php
//le tableau
$tableau = array (200, 204, 173, 98, 171, 404, 459);

//compte nombre d'éléments dans le tableau
//deja le faire marcher et ensuite compliquer en enlevant les fonctions systemes                                                                                                                                                                                                            on s'embete pour rien encore
$nbpos=count($tableau);

//prend chaque chiffre jusqu'au nombre d'élément dans la liste
for ($i = 0; $i <= $nbpos-1; $i++) {
 
    $nombre = $tableau[$i];
    if ($nombre % 2 == 0){
        echo "$nombre est paire<br>";
    }
    else {
        echo "$nombre est impaire<br>";
    }
}
?>