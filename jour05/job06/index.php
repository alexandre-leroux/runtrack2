<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>






<?php


$str = ' le petit BAteau s\'en va sur l\'eau et c\'est ainsi que naquit une nation, ouais on est trop fort';


function leetspeak($str)
{


    for ( $i=0 ; isset($str[$i]); $i++ )

        {

            if ( $str[$i] == 'a' OR $str[$i] == 'A') $str[$i] = 4 ;
            elseif ( $str[$i] == 'b' OR $str[$i] == 'B') $str[$i] = 8 ;
            elseif ( $str[$i] == 'e'OR $str[$i] == 'E') $str[$i] = 3 ;
            elseif ( $str[$i] == 'g' OR $str[$i] == 'G') $str[$i] = 6 ;
            elseif ( $str[$i] == 'l' OR $str[$i] == 'L') $str[$i] = 1 ;
            elseif ( $str[$i] == 's' OR $str[$i] == 'S') $str[$i] = 5 ;
            elseif ( $str[$i] == 't' OR $str[$i] == 'T') $str[$i] = 7 ;
      
            echo $str[$i];
        }

        
}


leetspeak($str);


?>











</body>

</html>