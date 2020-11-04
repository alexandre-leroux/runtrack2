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

for ( $i = 0; isset($tab[$i]); $i++  ){}



for ( $e = 0; $e < $i; $e++)



 if ($tab[$e]%2 == 0)
    { echo $tab[$e]. ' est paire <br>';}
else
    { echo $tab[$e]. ' est impaire <br>';}
    

?>




</body>

</html>