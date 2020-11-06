<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>

<form method="post" action="index.php">


    <label for="largeur">largeur :</label>
    <input type="largeur" name="largeur" id="largeur" />

            <br />

    <label for="hauteur">hauteur :</label>
    <input type="hauteur" name="hauteur" id="hauteur" />

            <br />


    <input type="submit" value="Envoyer" />

    <br /><br />


</form>





<?php

        var_dump($_POST);

        echo '<br><br>';

       
        $largeur = $_POST["largeur"];
        $hauteur = $_POST["hauteur"];
    
        echo str_repeat(' /____________\ <br>' , $largeur) ;
        echo '<br>';
        echo str_repeat('_' , $hauteur) ;

        // while (  $_POST["largeur"] < $a  )  { echo str_repeat('_' , $a) ;}

        // if( isset( $_POST["largeur"]) == 1) { echo str_repeat('_' , $a) ;  echo '<br>'; echo str_repeat('_' , $a)          ; }

        // else echo '';
    
     
        foreach ($_POST as $key => $value);
        

?>






<br>









</body>

</html>