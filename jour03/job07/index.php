<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>




<?php


    $str ='Certaines choses changent, et d\'autres ne changeront jamais.';


    for ( $i = 1; isset($str[$i]); $i++  )

    { echo $str[$i]; }

    echo$str[0];

    
    
?>





</body>

</html>