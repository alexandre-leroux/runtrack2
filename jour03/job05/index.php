<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>




<?php

    $str =' "On n est pas le meilleur quand on le croit mais quand on le sait”.';

    $tab = str_split($str, 1);

    $dico = [
        'consonnes' => 'aeiouy',
        'voyelles' => 'b', 'c', 'd',
    ];

    echo $dico['consonnes'];
  
?>



<br><br><br><br><br><br><br><br><br><br>


<?php
    $variables = [
        ['type' => 'int', 'contenu' => 'entier', 'valeur' => '12'],
        ['type' => 'float', 'contenu' => 'nombre dec.', 'valeur' => '12.9'],
        ['type' => 'string', 'contenu' => 'texte', 'valeur' => 'hello world!'],
    ];


    foreach($variables as $cle => $details)
    
        {
        foreach ($details as $c => $v){
            echo $c. ' : ' .$v. '<br>';
        }
        echo '<br>';
    }

    echo '<pre>';
    print_r($variables);
    var_dump($variables);
    echo '</pre>';
?>




</body>

</html>