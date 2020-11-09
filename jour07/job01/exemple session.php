<?php 

session_start();

$_SESSION['nom'] = 'Leroux' ;
$_SESSION['prénom'] = 'Alex';
$_SESSION['nbvisites'] = 0;


setcookie('pseudo', 'Alex', time() + 365*24*3600, null, null, false, true);

?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>


<?php

$str = 'hello LaPlateforme!';

function hello($str)
{
    echo $str;
}

hello($str)

?>











</body>

</html>