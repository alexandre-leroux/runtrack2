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

if (isset($_POST["reset"]))  {  session_destroy(); exit; }





if (isset($_POST["prenom"]))     { $_SESSION["prenom"][] = $_POST["prenom"];
 }

 @$prenoms = $_SESSION["prenom"];





 if (isset($_POST["prenom"])) {

 foreach ( $prenoms as $key => $value){
    echo $value. ' <br>';
}
 }





?>



<pre>
<?php
// var_dump($_SESSION) ;
?>
</pre>




</body>

</html>