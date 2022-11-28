<?php
    // connexion
    $mysqli = new mysqli('localhost', 'root', '', 'Jour09');

    // requete
    $request = $mysqli -> query("SELECT * FROM etudiants");    

     //$result_all = $request -> fetch_all();
     //var_dump($result_all);

    // while(($result_array = $request -> fetch_array()) != null){
    //     var_dump($result_array);
    //     echo "<br>";
    //     echo $result_array[1];

    // }


?>

        <style>
        table,th,td {
            padding: 10px;
            border: 2px solid black;
            border-collapse: collapse;
        }
        </style>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while(($result = $request -> fetch_array()) != null)
                {
                    echo "<tr>";
                    echo "<td>".$result['prenom']."</td>";
                    echo "<td>".$result['nom']."</td>";
                    echo "<td>".$result['naissance']."</td>";
                    echo "<td>".$result['sexe']."</td>";
                    echo "<td>".$result['email']."</td>";
                    echo "</tr>";
                }
            ?>
    </table>
</body>
</html>