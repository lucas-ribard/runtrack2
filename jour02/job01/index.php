<?php
//compte de 1 a 1337
for ($i = 1; $i <= 1337; $i++) {
    //si le nombre est 44
    if ($i === 42){
        //ecrit en gras et souliigné
        echo "<b><u>";
        echo 42;
        echo "</b></u><br>";

    }
    //sinon (pas 42) ecrit le chiffre courrant
    else{echo "$i<br>";}
    }

?>


