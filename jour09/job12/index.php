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

 $requete = "SELECT prénom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1997-12-31' AND '2019-01-01' ";

$query = mysqli_query($db, $requete);



mysqli_close($db);
$resultat = mysqli_fetch_assoc($query)

?>



<table>


    <thead>
        <tr>
            <?php             
                    foreach (  $resultat  as $key => $value)
                    
                    {
                        echo '<th>' .$key.'</th>'; 
                        
                    }
            ?>
        </tr>
    </thead>


    <tbody>
            <?php             

                    echo '<tr>';
                    foreach (  $resultat  as $key => $value)
                                        
                    {
                        echo '<td>' .$value.'</td>'; 
    
                    }
                    echo '<tr/>';
                    




                    while (  ( $resultat = mysqli_fetch_assoc($query) )  != NULL)

                    {

                        echo '<tr>';  
                        
                        foreach ( $resultat as $key => $value){
                            echo '<td>' .$value.'</td>'; 
                                }  
                        
                        '<tr/>';
                    }

            ?>
    </tbody>


</table>





</body>

</html>