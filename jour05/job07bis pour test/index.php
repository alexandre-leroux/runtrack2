<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>



<form action="index.php" method="get">

            <label for="str">Texte :</label>  
            <input type="str" name="str"  />

            <br>
            <br>

       
            <select name="fonction" id="fonction">
                <option disabled="disabled" selected>choisir un style</option>
                <option value="gras"> gras</option>
                <option value="cesar">cesar</option>
                <option value="plateforme">plateforme</option>

            </select>

            <br>
            <br>

            <input type="submit" >

</form>




<?php







@$i = $_GET['str'];
@$f = $_GET['fonction'];



if ( $f == 'cesar' )  cesar( $f, $i );







    function cesar($str, $decalage) {
        $upper="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $lower="abcdefghijklmnopqrstuvwxyz";




$step = 6;

for ( $ee=0 ; isset($i[$ee]) ; $ee++)  

 
{  



    for ($ii=0 ; isset($alph[$ii]) ; $ii++  )

    if ($i[$ee] == $alph[$ii] ) 
    
    
    { $i[$ee]  = $ee + $step ; }
                                        
    echo $i ;


}

                                            

}





?>





</body>

</html>