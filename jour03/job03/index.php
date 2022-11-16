<?php

$str = "I'm sorry Dave I'm afraid I can't do that";

echo "$str<br>";

//tant que la phrase ne dépasse pas 100 mots tout ira bien  (on peux toujours monter la quantité)
for ($i = 0; $i <= 100; $i++) {
    //prend la lettre en position $i
    $lettre = $str[$i];
    //si c'est une voyelle maj ou pas 
    if ($lettre === 'a' or $lettre === 'e' or $lettre === 'i' or $lettre === 'o' or $lettre === 'u' or $lettre === 'y' or $lettre === 'A' or $lettre === 'E' or $lettre === 'I' or $lettre === 'O' or $lettre === 'U' or $lettre === 'Y'){
        //ecrit la lettre
        echo "$lettre";
    }


    /* j'ai essayé :(
    $voyelles = array (a, e, i, o, u, y, A, E, I, O, U, Y);
    if (in_array($lettre, $voyelles)){
        echo $lettre;
}
*/

   
}


?>