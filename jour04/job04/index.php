<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>




<table>

        <tr>
                <td>Arguments </td>
                <td>Valeurs</td>
        </tr>

        <br>

<?php

    
    foreach ( $_POST as $key => $value ) {   

        echo   '<tr><td>' . $key. ' : '  .$value. '</td></tr>';

        }
    
?>




</table>

<br>


<form method="post" action="index.php">


    <label for="nom">nom :</label>
    <input type="text" name="nom" id="nom" />

            <br />

    <label for="prénom">prénom :</label>
    <input type="prénom" name="prénom" id="prénom" />

            <br />

    <label for="prénom 2 ">prénom 2 :</label>
    <input type="text" name="prénom 2 " id="prénom 2 " />

            <br />

    <label for="Votre_ville">Votre ville :</label>
    <input type="text" name="Votre_ville" id="Votre_ville" />

            <br />

        <label for="ville">Ville :</label>
    <input type="text" name="ville" id="ville" />

            <br />


    <input type="submit" value="Envoyer" />


</form>








</body>

</html>