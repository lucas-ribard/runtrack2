<form action="" method="get">
    
        <label for="hauteur">Hauteur :</label><br>
        <input type="text" name="hauteur" id="hauteur"><br>
        <br>
        <label for="largeur">Largeur :</label><br>
        <input type="text" name="largeur" id="largeur"><br>
        <br>
        
        <input type="submit" value="Submit"><br>
    
</form>


<?php

$space="&nbsp;&nbsp;";

$hauteur=$_GET["hauteur"];
$largeur=$_GET["largeur"];

echo "$hauteur $largeur <br>";

//triangle
//espace avant pointe
if (isset($hauteur)){
    for ($tempespace = $largeur; $tempespace > 0; $tempespace--){
        echo "$space";
    }
    echo "/\ <br>";

    //                    -1 pour compenser la pointe d'au dessus
    //                   V
    //taille du toit
    $tespa=0;
    for ($temp = $hauteur-1; $temp > 0; $temp--, $tespa++){
        //espace avant "   "/   \
        for ($tempespace = $largeur-1; $tempespace > $tespa; $tempespace--){
            echo "$space";
        }

        echo "/";
        //espace apres     /"    "\
        for ($tempespace = $largeur-2; $tempespace > $tespa; $tempespace--){
            echo "$space";
    }
        echo "\ <br>";
    }
}
//carré
//for ($i = 0; i<=$hauteur; $i++){}



?>