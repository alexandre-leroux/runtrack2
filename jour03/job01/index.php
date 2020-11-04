<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>




<?php

    $tab = array (200, 204, 173, 98, 171, 404, 459) ;

  

    $nb = count($tab);

    for ( $i = 0; $i < $nb; $i++)
    


     if ($tab[$i]%2 == 0)
        { echo $tab[$i]. ' est paire <br>';}
    else
        { echo $tab[$i]. ' est impaire <br>';}
        

?>




</body>

</html>