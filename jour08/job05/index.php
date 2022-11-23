<?php
    function affichage($Ligne1,$Ligne2,$Ligne3){
        echo $Ligne1[0],"&ensp;|&ensp;",$Ligne1[1],"&ensp;|&ensp;",$Ligne1[2],"<br>";
        echo $Ligne2[0],"&ensp;|&ensp;",$Ligne2[1],"&ensp;|&ensp;",$Ligne2[2],"<br>";
        echo $Ligne3[0],"&ensp;|&ensp;",$Ligne3[1],"&ensp;|&ensp;",$Ligne3[2],"<br>";
        Victoire($Ligne1,$Ligne2,$Ligne3);
        echo "<br>";
    }


    function Victoire($Ligne1,$Ligne2,$Ligne3){
        //logique de victoire
        if($Ligne1[0]===$Ligne1[1] and $Ligne1[1]===$Ligne1[2]){
            echo "<br>victoire de ",$Ligne1[0],"<br>";
        }
        elseif($Ligne2[0]===$Ligne2[1] and $Ligne2[1]===$Ligne2[2]){
            echo "<br>victoire de ",$Ligne2[0],"<br>";
        }
        elseif($Ligne3[0]===$Ligne3[1] and $Ligne3[1]===$Ligne3[2]){
            echo "<br>victoire de ",$Ligne3[0],"<br>";
        }
        elseif($Ligne1[0]===$Ligne2[1] and $Ligne2[1]===$Ligne3[2]){
            echo "<br>victoire de ",$Ligne1[0],"<br>";
        }
        elseif($Ligne3[0]===$Ligne2[1] and $Ligne2[1]===$Ligne1[2]){
            echo "<br>victoire de ",$Ligne1[0],"<br>";
        }
    }

    function bouton(){
        ?>
            <form action="" method=""get> 
            <input type = 'submit' name='case' value = '-'>
            </form>
        <?php

    }
    //je vais faire des cauchemars de ces boutons
    $Ligne1=array('X','X','X');
    $Ligne2=array('X','O','O');
    $Ligne3=array('O','X',bouton());

    affichage($Ligne1,$Ligne2,$Ligne3);
    



?>
    <form action="" method=""get> 
    <input type = 'submit' name='reset' value = 'reset jeux'>
    </form>
<?php