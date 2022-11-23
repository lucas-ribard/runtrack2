<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">
<html>
<head>
    <title>MORPION</title>
    <link href="index.css" rel="stylesheet" type="text/css"/>
</head>

<header>
<h1> Morpion </h1>
</header>

<?php

$ligne1=array('O','X','O');
$ligne2=array('X','O','X');
$ligne3=array(bouton(),'X','O');



function bouton(){
    ?>
    <form action="" method="post"> 
        <input type = 'submit' name='placer' value = '-'>
        
    </form>
    <?php
}



?>


<body>

<section id="entier">
    <div class=case>
    &ensp; <?php echo $ligne1[0] ?> &ensp;
    </div>
    &ensp;&ensp;
    <div class=case>
    &ensp; <?php  echo$ligne1[1] ?> &ensp;
    </div>
    &ensp;&ensp;
    <div class=case>
    &ensp; <?php  echo $ligne1[2] ?> &ensp;
    </div>
</section>

<br>

<section id="entier">
    <div class=case>
    &ensp; <?php echo $ligne2[0] ?> &ensp;
    </div>
    &ensp;&ensp;
    <div class=case>
    &ensp; <?php  echo$ligne2[1] ?> &ensp;
    </div>
    &ensp;&ensp;
    <div class=case>
    &ensp; <?php  echo $ligne2[2] ?> &ensp;
    </div>
</section>

<br>

<section id="entier">
    <div class=case>
    &ensp; <?php echo $ligne3[0] ?> &ensp;
    </div>
    &ensp;&ensp;
    <div class=case>
    &ensp; <?php  echo$ligne3[1] ?> &ensp;
    </div>
    &ensp;&ensp;
    <div class=case>
    &ensp; <?php  echo $ligne3[2] ?> &ensp;
    </div>

</section>

