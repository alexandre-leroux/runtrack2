<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>

<?php

    $nb = 0;

    while ( $nb <101)

    {
        if( ! ($nb % 5) and !($nb % 3 )  )
        {
            echo 'BuzzFizzzzzzzz <br>';
        }

        elseif( ! ($nb % 3) )
        {
            echo 'Fizz <br>';
        }

        elseif( ! ($nb % 5) )
        {
            echo 'Buzz <br>';
        }

        else{
            echo $nb. '<br>';
        }

        $nb++;
     
    }
        



?>















</body>

</html>