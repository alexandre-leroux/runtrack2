<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css" /> 
    <title>tab</title>
</head>


<body>




<?php


    $croissant = true ;

    $tab = ['abc', 'wds', 'ghi','ztr', 'def'];

    echo bubblesort($tab, $croissant );










                function  bubblesort($tab, $croissant ){


                    $taille = count($tab);


                    if ( $croissant == true) {

                        sort($tab);

                    for ( $i = 0 ; $i < $taille ; $i++)  { echo $tab[$i]. '<br>' ;}

                    }

                    if ( $croissant == false) {

                        rsort($tab);

                    for ( $i = 0 ; $i < $taille ; $i++)  { echo $tab[$i]. '<br>' ;}

                    }

                    
                }



?>


<pre>
    <!-- <?php
    var_dump($tab);
    ?> -->
</pre>

</body>

</html>