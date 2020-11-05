<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>





<?php

        if( empty($_POST["username"]) AND empty($_POST["password"]) ) {}

    
        elseif ( $_POST["username"]  == 'John' AND $_POST["password"] == 'Rambo' ) {   

        echo   ' c\'est pas ma guerre' ;

        }

        else echo 'Votre pire cauchemard';
    
?>






<br>


<form method="post" action="index.php">


    <label for="username">username</label>
    <input type="username" name="username" id="username" />

            <br />

    <label for="password">password :</label>
    <input type="password" name="password" id="password" />

            <br />


    <input type="submit" value="Envoyer" />


</form>








</body>

</html>