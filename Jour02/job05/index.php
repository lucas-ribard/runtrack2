<?php
//compte de 1 a 1000
for ($i = 1; $i <= 1000; $i++) {
    echo "compteur $i<br>";
    //test de diviser $i par tout les nombres entre 0 et $i
    for ($x = 1; $x <= $i; $x++) {
        
        if ($i % $x == 0 ){
            $premier=true;
        }
        else{
            $premier=false;
        }
    }
    echo "test premier $i<br>";
    if($premier=true){
        echo "$i<br>";
    }

}
?>
