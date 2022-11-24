<?php

    //LES FONCTIONS

    function affichage($Ligne1,$Ligne2,$Ligne3){
        echo $Ligne1[0],"&ensp;|&ensp;",$Ligne1[1],"&ensp;|&ensp;",$Ligne1[2],"<br>";
        echo $Ligne2[0],"&ensp;|&ensp;",$Ligne2[1],"&ensp;|&ensp;",$Ligne2[2],"<br>";
        echo $Ligne3[0],"&ensp;|&ensp;",$Ligne3[1],"&ensp;|&ensp;",$Ligne3[2],"<br>";
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
        echo "<br>";
    }



    function Tour($joueur){
        //si joueur est X
        if($joueur==="X"){
            //change joueur en O dans var et cookie
            setcookie("joueur", "O",time()+3600);
            $joueur=$_COOKIE["joueur"];
            echo "c'est au tour de ",$joueur,"<br>";
            return$joueur;
        }
         //change joueur en X dans var et cookie
        elseif($joueur==="O"){
            setcookie("joueur", "X",time()+3600);
            $joueur=$_COOKIE["joueur"];
            echo "c'est au tour de ",$joueur,"<br>";
            return$joueur;
        }
        else{
            echo "Fail Joueur<br>";
            echo $joueur;
        }
    }

    function bouton(){
        ?>
            <form action="" method="get"> 
            <input type = 'submit' name='case' value = '-'>
            </form>
        <?php

    }

    //LES VARIABLES
    
    $Ligne1=array('X','X');
    $Ligne2=array('X','O','O');
    $Ligne3=array('O','X','X');

    //LE CODE

    //bouton pour de choisir le joueur
    ?>
        <form action="" method="get"> 
            <input type = 'submit' name='swplayer' value = 'jouer avec X'>
            <input type = 'submit' name='swplayer' value = 'jouer avec O'>
         </form>
    <?php 
    
    //si bouton 
    if (isset ($_GET['swplayer'])){
        //si joue avec x
        if ($_GET['swplayer']==="jouer avec X"){
            //cookie joueur avec X
            setcookie("joueur", "X",time()+3600);
        } 
        elseif($_GET['swplayer']==="jouer avec O"){
            //cookie joueur avec O
            setcookie("joueur", "O",time()+3600);
        }
        
    }
$joueur=$_COOKIE["joueur"];
   
    //AFFICHAGE

    //affiche le jeux
    affichage($Ligne1,$Ligne2,$Ligne3);
    //check si victoire
    Victoire($Ligne1,$Ligne2,$Ligne3);
    //change de joueur
    Tour($joueur);

?>
    <form action="" method="get"> 
    <input type = 'submit' name='reset' value = 'reset jeux'>
    </form>

    <!-- faire fonction reset -->


///// test //////

    <form action="" method="get"> 
    <input type = 'submit' name='case' value = '-'>
    <input type = 'submit' name='case' value = '-'>
    <input type = 'submit' name='case' value = '-'>
    </form>


    ---

<form action="" method="get"> 
    <?php if (isset($Ligne1[0])){
        echo $Ligne1[0];
    }
    else{
            //case Ligne1 input 0
        ?><input type = 'submit' name='caseL1I0' value = '-'><?php
    }
    ?>

    <?php if (isset($Ligne1[1])){
        echo $Ligne1[1];
    }
    else{
            //case Ligne1 input 1
        ?><input type = 'submit' name='caseL1I1' value = '-'><?php
    }
    ?>

    <?php if (isset($Ligne1[2])){
        echo $Ligne1[2];
    }
    else{
            //case Ligne1 input 2
        ?><input type = 'submit' name='caseL1I2' value = '-'><?php
    }
    ?>
</form>






<?php
echo $joueur,"<br>";

//test bouton OK
if ($_GET['caseL1I2']==="-"){
   echo "test envoi";
   $Ligne1[2]="X";
   
} 




/*

form
//si element d'array vide
for $i <= 3{
    si isset array[place]
    echo array[place]
else
    input type 
}
/form

comment trouver qui est qui ?
pas dans une boucle mais la condition pour chaque element ?
tous avec un nom différents ?


<form action="" method=""get> 
<?php if (isset(Ligne1[0])){
    echo $Ligne1[0];
}
else{
        //case Ligne1 input 0
       ?><input type = 'submit' name='caseL1I0' value = '-'><?php
}


<?php if (isset(Ligne1[1])){
    echo $Ligne1[1];
}
else{
        //case Ligne1 input 1
       ?><input type = 'submit' name='caseL1I1' value = '-'><?php
}


<?php if (isset(Ligne1[2])){
    echo $Ligne1[2];
}
else{
        //case Ligne1 input 2
       ?><input type = 'submit' name='caseL1I2' value = '-'><?php
}
</form>
*/
?>