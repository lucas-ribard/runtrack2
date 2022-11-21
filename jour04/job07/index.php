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

function space()
	{
        //faire une fonction pour espace * nombre d'espace a mettre
		echo "Exemple de fonction.\n";
	}




$hauteur=$_GET["hauteur"];
$largeur=$_GET["largeur"];
//triangle
echo (""*$hauteur),"/\ <br>";
//                          -1 pour compenser la pointe d'au dessus
//                         V
for ($i = 0; $i<=($hauteur-1); $i++){
    $espace = $hauteur-$i;
    echo "/",(""*$espace),"\ <br>";
}
//carré
for ($i = 0; i<=$hauteur; $i++){
    
}



?>