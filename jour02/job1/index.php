<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>







<?php 

    $nombre = 1;

    while ( $nombre < 1337 )

    {
        echo $nombre. '<br>' ;

                if ($nombre == 42)
                {
                    echo '<b><u>' .$nombre. '</b></u><br>';
                }

        $nombre++;
    }


?>








</body>

</html>