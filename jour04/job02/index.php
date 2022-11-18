<form action="" method="get">
    
        <label for="prenom">Prénom :</label><br>
        <input type="text" name="prenom" id="prenom"><br>
        <br>
        <label for="name">Nom :</label><br>
        <input type="text" name="nom" id="nom"><br>
        <br>
        <label for="age">Age :</label><br>
        <input type="text" name="age" id="age"><br>
        <br>
        <label for="mail">E-mail :</label><br>
        <input type="text" name="mail" id="mail"><br>
        <br>
        <label for="sexe">Sexe :</label><br>
        <input type="text" name="sexe" id="sexe"><br>
        <br>
        
        <input type="submit" value="envoyer"><br>
    
</form>


<style>
    table{
        padding:2%;
    }
    td {
        border: 1px solid #333;
    }

    thead,
    tfoot {
        background-color: #333;
        color: #fff;
    }   

</style>

    <br>
    <table >
    <thead>
        <tr><th>Arguments</th><th>Valeurs</th></tr> 
    </thead>
        <?php
            // pour chaque GET en argument
            foreach ($_GET as $args => $value) {
                $len=0; 
                for ($i = 0; (isset($value[$i])); $i++) {
                $len++; 
                }
                if ($len > 0) { // si valeur est plus grande que 0
                    echo "<tr>"; //nouvelle ligne de tableau
                    echo "<td>$args</td>"; //arguments dans une colonne
                    echo "<td>$value</td>"; //valeur dans une colonne
                    echo "</tr>";

                }
            }
        ?>
        
    </table>