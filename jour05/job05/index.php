<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>






<?php


$str = ' le petit bateau s\'en va sur l\'eau';
$char = 'a';


function occurences($str, $char)
{

    $c =0;

    for ($a=0; isset($str[$a]); $a++) 

        { 

                for ($b=0; isset($char[$b]); $b++) 


                    {  
                         if ($str[$a] == $char[$b]) $c++; 
                        
                    } 

        }

  
    return($c);

}

echo occurences($str, $char);




?>











</body>

</html>