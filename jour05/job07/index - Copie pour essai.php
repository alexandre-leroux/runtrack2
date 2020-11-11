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


if ( $f == 'gras' AND ctype_upper($i[0]) ) { gras( $f, $i);}

if ( $f == 'cesar' )  cesar( $f, $i );

if ( $f == 'plateforme' )  plateforme( $f, $i );



function plateforme( $f, $i )
{

    $rest = substr($i, -2);

    if ( $rest == 'me' ) { echo $i. '_';}

    else { echo $i ; } 

}


function gras( $f, $i )
{
   
    echo '<b>' . $i . '<b>';
   
}



function cesar( $f, $i )
{

    $alph = 'abcdefghijklmnopqrstuvwxyz';

 $test = str_split($i);

$step = 2;

 for ( $ee=0 ; isset($test[$ee]) ; $ee++)  
 
                {  

                    for ($ii=0 ; isset($alph[$ii]; $ii++ )
                    if ($test[$ee] == $alph[$ii] ) { $test[$ee] + $step ; }
                                                        
                    echo  $test ;


                }

                                            

}







?>





</body>

</html>