<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>







<?php 

    $nombre = 0;

    while ( $nombre <1338 )

    {
        echo $nombre. '<br>' ;

        if ($nombre == 25) $nombre++;
        if ($nombre == 36) $nombre++;
        if ($nombre == 87) $nombre++;
        if ($nombre == 1110) $nombre++;
        if ($nombre == 1232) $nombre++;

        $nombre++;
    }

?>








</body>

</html>