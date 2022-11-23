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
    if (!isset($_COOKIE['nbvisit']))
    {
        $cookie = 1;
        setcookie("nbvisit", $cookie);
    }
    //compteur
    else{
        //cookie est = a "nbvisit"+1
        $cookie = ++$_COOKIE['nbvisit'];
        setcookie("nbvisit", $cookie);
        
    echo "il y a eu ",$_COOKIE['nbvisit']," visites";
    }
?> 

