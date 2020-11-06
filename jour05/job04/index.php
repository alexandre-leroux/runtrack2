<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>






<?php

$a = 5;
$operation = "mul";
$b = 2;


function calcule($a, $b, $operation)
{
   
    if ($operation == "add")
        return ($a + $b);
    else if ($operation == "mul")
        return ($a * $b);
    else if ($operation == "div")
        return ($a / $b);
 

}

echo calcule($a, $b, $operation)




?>










</body>

</html>