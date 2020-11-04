<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>




<?php

    $str ='“I\'m sorry Dave I\'m afraid I can\'t do that”.';

    $tab = str_split($str, 1);

    foreach($tab as $clef => $valeur)
    
    if( $valeur == 'a')
    
    {
        echo $valeur;
    }
   
    elseif($valeur == 'e')
    
    {
        echo $valeur;
    }
    elseif($valeur == 'i')
    
    {
        echo $valeur;
    }
    elseif($valeur == 'o')
    
    {
        echo $valeur;
    }
    elseif($valeur == 'u')
    
    {
        echo $valeur;
    }
    elseif($valeur == 'y')
    
    {
        echo $valeur;
    }
?>






</body>

</html>