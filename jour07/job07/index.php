<!-- Formulaire -->
<form action="" method="post">
    <label for="str">Votre texte :</label><br>
    <input type="text" name="str" id="str"><br>
    <br>
    <label for="option">Background Color:</label>
    <select name="option" id="option">
        <option valeur="gras">Gras</option>
        <option valeur="cesar">Cesar</option>
        <option valeur="plateforme">Plateforme</option>
    </select><br>
    <br>
    <input type="submit" value="envoyer"><br>
   
</form>


<?php 

    //init values

    $str=$_POST["str"];
    $option=$_POST["option"];

    echo"$str<br>";
    echo"$option<br>";

    $alphabet="abcdefghijklmnopqrstuvwxyz";
    $ALPHABET="ABCDEFGHIJKLMNOPQRTSUVWXYZ";

    //fonctions 

    function gras($str,$ALPHABET){
        //met en gras les mots qui comencent par une MAJ
        /*
        if dans $ALPHABET mettre en gras jusqu'a " "
        */
    }
    function cesar($str,$alphabet,$ALPHABET){
        //fait un decalage de lettre A décalage de 2 = C
        //décalage vaut 2 par default , rajouter un imput ? plus tard
        /*
        boucle $i
        alphabet[$i]
        lettre = alphabet[$i+$déclage]
            if $i > 26 {
                $i = $i-26
            }
        */
    }
    function plateforme($str){
        //si finit par me ajoute "_"
        /*
        if (m){
            if(e){
                echo "_"
            }
        }
        */
    }

    //code

    if ($option==="gras"){
        $str=gras($str);

    } 
    if ($option==="cesar"){
        $str=cesar($str);

    }
    if ($option==="plateforme"){
        $str=plateforme($str);

    }
?>

		