<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>




<?php

    $string ='Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';

    $tab = str_split($string, 1);

    foreach($tab as $clef => $valeur)
    
    if( $clef % 2 == 0)
    
    {
        echo $valeur;
    }

?>






</body>

</html>