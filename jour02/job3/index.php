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

    while ( $nombre <101 )

    {
       

            if($nombre<21) 
                {
                    echo '<b>'.$nombre. '</b><br>';
                }

            elseif($nombre>20 and $nombre<25) 
                {
                    echo $nombre. '<br>';
                }

            elseif($nombre>24 and $nombre<42) 
                {
                    echo '<u>'.$nombre. '</u><br>';
                }
            
            elseif($nombre==42) 
                {
                    echo 'la plateforme </br>';
                }

            elseif($nombre>42 and $nombre<51) 
                {
                    echo '<u>'.$nombre. '</u><br>';
                }


        $nombre++;
    }

   
?>















</body>

</html>