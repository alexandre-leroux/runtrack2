<?php


session_start();

@setcookie('prenom', $_POST['prenom']);


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

    if ( isset($_POST["prenom"] ) )   {  $_COOKIE["prenom"][] = $_POST["prenom"];  }

    $prenom = @$_COOKIE["prenom"];
    
    if (isset($_POST["reset"])){
        $_COOKIE["prenom"] = NULL;
        
    }
?>



                <form method="post">

                <?php
                if (!isset($_COOKIE["prenom"])){
                    ?>

                    <div class="form-group">
                        <label for="email">Prénom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom" required/>
                    </div>

                    <input type="submit" name="login" class="btn btn-info" value="Submit" />
                </form>

                <?php
                }
            
            
                
                if (isset($_COOKIE["prenom"])){
                    echo 'Bienvenue ' . $prenom[0]. '<br>';
                    ?>
                <form method="post">
                    <button class="btn btn-dark" name="reset">
                        Deco
                    </button>
                </form>
                <?php
                }
                ?>

<?php



?>
<pre>
<?php
// var_dump($_COOKIE) ;
?>
</pre>




</body>

</html>