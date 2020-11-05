<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>




<?php

$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$dic = array (
    'voyelles' => "aeiouyO",
    'consonnes' => "bcdfghjklmnpqrstvwxz")
;

$nbvoyelles = 0;
$nbconsonnes = 0;

for ($i=0; isset($str[$i]) ; $i++) {

    for ($x=0; isset($dic['voyelles'][$x]) ; $x++) {
        if ( $str[$i] == $dic['voyelles'][$x] ) 
            $nbvoyelles++;
        }
    }

echo "$nbvoyelles"."<br />";

for ($i=0; isset($str[$i]) ; $i++) {

    for ($y=0; isset($dic['consonnes'][$y]) ; $y++) {
        if ( $str[$i] == $dic['consonnes'][$y] ) 
            $nbconsonnes++;
        }
}

echo "$nbconsonnes" . "<br />";

?>


</body>

</html>