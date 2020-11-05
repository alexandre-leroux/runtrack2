<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>


<?php

       foreach ($_GET   as  $key => $value)

       if (is_numeric($value)) {
               
                 if ($value%2 == 0){echo 'pair';}
        
                  elseif ($value%2 == 1){echo 'impair';} }
        
        
       else echo ' votre saisie ne contient pas que des chiffres';
?>






<?php

//        foreach ($_GET   as  $key => $value)

//        if ($value%2 == 0){echo 'pair';}
       
//        elseif ($value%2 == 1){echo 'impair';}
//        else echo ' votre saisie ne contient pas que des chiffres';
?> 






<br>


<form method="get" action="index.php">





        <textarea name="nombre" id="nombre" rows="10" cols="50"></textarea>
        

    <input type="submit" value="Envoyer" />


</form>








</body>

</html>