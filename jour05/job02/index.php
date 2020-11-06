<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>


<?php

$jour = true;

function bonjour($jour)
{
    if ( $jour == 0){ echo "Bonsoir";}
    else echo "Bonjour";
}

bonjour($jour)

?>











</body>

</html>