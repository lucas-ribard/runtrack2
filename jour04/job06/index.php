<form action="" method="post">
    
        <label for="nombre">Nombre :</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <br>
        <input type="submit" value="Submit"><br>
    
</form>

<?php
//code 100% recyclé de l'exo 1 du jour 3 car ici on tient a l'environnement
$nombre = $_POST["nombre"];
    if (isset($nombre)){
        if ($nombre % 2 == 0){
            echo "$nombre est paire<br>";
        }
        else {
            echo "$nombre est impaire<br>";
        }
    }
?>