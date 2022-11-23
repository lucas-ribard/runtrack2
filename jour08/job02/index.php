<form action="" method=""get>
<input type = 'submit' value = 'Reload page'>  
<input type = 'submit' name='reset' value = 'reset compteur'>
<br>

<?php 
    //bouton reset
    if (isset ($_GET['reset'])){
        $_COOKIE['nbvisit']=0;
    
    } 
    //si jamais visité
    if (!isset($_COOKIE['nbvisit'])){
        $compteur = 1;
        setcookie("nbvisit", $compteur);
    }
    //compteur
    else{
        //cookie est = a "nbvisit"+1
        $compteur = ++$_COOKIE['nbvisit'];
        setcookie("nbvisit", $compteur);
        
    echo "il y a eu ",$_COOKIE['nbvisit']," visites";
    }
?> 

