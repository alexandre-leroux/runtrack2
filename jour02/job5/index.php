<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>


<?php

function toto($number) 
        {
                for ($i = 2; $i < $number; $i++) 

                {
                    if ($number % $i == 0) 
                {
                    return FALSE;
                }
        }
 
         return TRUE;

        }
 

        echo '<br>Nombre premier de 0 à 1000 :<br>';

                for ($i = 3; $i < 1000; $i++)
                        {

                        if (toto($i)) 

                        {  echo $i.' <br>';  }

                        }

?>











</body>

</html>