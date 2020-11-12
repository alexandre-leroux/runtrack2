<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css" /> 
    <title>tab</title>
</head>


<body>

 


<?php





$db = mysqli_connect( "localhost", "root", "root", "jour08");

$requete = "SELECT *FROM etudiants;";



$query = mysqli_query($db, $requete);

// while (($resultat = mysqli_fetch_assoc($query)) !=null){
//     var_dump($resultat) ;
//     echo 'tour';
// }
$resultat = mysqli_fetch_assoc($query);



foreach ( $resultat as $key => $value){
    echo $key." "; 
}

echo "<br />";

while (  ( $resultat = mysqli_fetch_assoc($query) )  != null)
{
    foreach ( $resultat as $key => $value){
         echo $value." "; 
    }
    echo "<br />";
}

// foreach ( $resultat as $key => $value){
//     echo $key; echo $value;
// }
// $resultat = mysqli_fetch_assoc($query);


// foreach ( $resultat as $key => $value){
//     echo $key; echo $value;
// }

// foreach ( $resultat as $result){
//     echo $result[1]."<br>";



mysqli_close($db);

?>













<!-- <pre>
    <?php
    // var_dump($resultat);
    ?>
</pre> -->

</body>

</html>