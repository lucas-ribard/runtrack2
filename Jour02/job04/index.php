<?php
//compte de 1 a 100
for ($i = 1; $i <= 100; $i++) {
    //si le nombre est divisble par 3
    if ($i % 3 == 0 xor $i % 5 == 0){

        echo "Fizz<br>";
    }
    
    

     //si le nombre est divisble par 5
    elseif ($i % 5 == 0 xor $i % 3 == 0){

        echo "Buzz<br>";
    }
    
    elseif ($i % 3 == 0 and $i % 5 == 0){
        echo "FizzBuzz<br>";
    }
    
    else{echo "$i<br>";}
}
?>
