<?php


session_start();


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>





<form action="index.php" method='post'>


                <input type="text" name='prenom' placeholder=prénom >       
                <input type="submit" name="submit">
                <input name = "reset" type="submit" value="reset">

</form>



<?php



// $_SESSION[] = 'test';
// $_SESSION[] = 'test 1';
// $_SESSION[] = 'test 2';

if (isset($_POST["prenom"])){    $_SESSION["prenom"][] = $_POST["prenom"];
 }
 if (isset($_POST["reset"])){         session_destroy();
 }
 if (isset($_SESSION["prenom"][0])){
         var_dump($_SESSION);
 }



// $i=0;
// while ( $_SESSION[$i]==true) {$i++;}
// if ( $_POST['prénom'] == true) {  $_SESSION[$i] =  $_POST['prénom'] ;}



// if ( @$_POST['prénom'] == true ) {$prenom = $_POST['prénom'] ; }

// elseif ( @$_POST['reset'] == true ) { session_destroy() ; exit; }
// for ( $i=0 ; isset($_SESSION[$i]) ; $i++ ) {

//     $_SESSION[] = $_POST['prénom']

// }
// echo $_SESSION;




?>



<pre>
<?php
var_dump($_SESSION) ;
?>
</pre>




</body>

</html>