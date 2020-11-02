<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>







<!-- ________________________conditions___________________________ -->
<!-- if(test){code à executer} -->

<?php

$x = 4; $y = 7;

if($x < 4)
     {echo 'meuh';}
elseif($x >5)
    {echo 'whoua <br>';}
elseif($x ==8)
    {echo 'pouhaaa <br>';}
if($x <7)
    {echo "bien ouej <br>";}
else
     {echo 'beuuuuuuuu';} 
?>

<br>

<?php 
$inscrit = true;
$age = 20;
if($inscrit){

    if($age>18){echo 'bienvenue <br>';}

    else{echo 'vous n\'avez pas l\'age <br>' ;}
    
            }
else {echo "utilisateur non inscrit <br>";}
?>

<!-- tester valeur var_dumb -->

<?php $x = 4;
var_dump($x == 4); ?>
<br>
<?php $x = 4;
var_dump($x === 4); ?>
<br>
<?php $x = 4;
var_dump($x != 4); ?>
<br>
<?php $x = 4;
var_dump($x !== 4); ?>
<br>
<?php $x = 4;
var_dump($x != 5); ?>
<br>
<?php $x = 4;
var_dump($x !== 5); ?>
<br>
<?php $x = 4;
var_dump($x > 5) ; ?>
<br>
<?php $x = 4;
var_dump($x !== 5); ?>






<br><br><br>

<?php $string = "hello world!"?>
<?php $integer = 15 ?>
<?php $float = 15.42 ?>
<?php $boolean = true ?>
<?php $array = "tableau" ?>
<?php $object = "objet" ?>
<?php $null = "null" ?>
<?php $resource = "ressource" ?>



<?php $type =[$string, $integer, $float, $boolean, $array, $object, $null, $resource]; 
echo $type[0]. '<br>'; 
echo $type[1]. '<br>'; ?>
<?php echo 'le tableau contient ' .count($type). ' valeurs' ?>

<br><br><br><br><br><br><br><br><br><br>

















<?php $str = "Laplateforme"; $str2 = "Vive "; $str3 = "!"; echo $str2, $str, $str3 ?>

<br><br>


<?php $val = 6; echo $val; $val = ($val + 4); echo "<br>"; echo $val ?>

<br><br>

<?php $myBool = true; echo $myBool ?>

<br><br>

<?php $myBool = false; echo $myBool ?>


<br><br><br><br><br><br><br><br><br><br>














<?php echo "Hello LaPlateforme!"; ?>

<?php echo "Ceci est du texte"; ?>
<br>

<?php print 'ceci est encore du texte';?>  <!-- echo ou print pour afficher du texte -->
<br>
<?php echo "Ceci est du <strong>texte</strong>"; ?>
<br>
<?php echo "cette ligne \"est\" belle";/*commentaires multi ligne*/?>   <!-- antislash pour mettre des guillemets-->
<br>
<?php echo "Ceci est du <strong>texte</strong>";//test commentaire mono ligne ?>
<br>

<!-- _________________________ les variables________________________ -->
<!-- 
    string : du texte
    int : 35 (nombre entier)
    float : 12.45 ( nombre décimal)
    bool : true or false
    null : X    < ? php $pas_de_valeur = NULL; ?>
 -->

 <?php //string
$nom_du_visiteur = "Mateo21";
$nom_du_visiteur = 'Mateo21';
?>
<br>
 <?php  //int ou float
$age_du_visiteur = 17;
?>
<br>
<?php  //booleen
$je_suis_un_zero = true;
$je_suis_bon_en_php = false;
?>
<br>
<?php //null
$pas_de_valeur = NULL;
?>
<!-- ________________ concatener une variable : assemblage de texte et de variable ________________________ -->

<?php
$age_du_visiteur = 17;
echo $age_du_visiteur;
?>
<br>

<?php
$age_du_visiteur = 17;
echo "Le visiteur a $age_du_visiteur ans"; // en guillement double
?>
<br>

<?php
$age_du_visiteur = 17;
echo 'Le visiteur a ' . $age_du_visiteur . ' ans'; // en guillement simple
?>
<br>

<?php
$nombre_a_retenir=20;
echo 'le nombre de pigeons est de ' . $nombre_a_retenir . '' ; 
?>
<br>
<?php 
$simple= 'je suis';
echo "pourquoi je $simple " ;
?>
<br>
<br>
<!-- ____________________________ les calculs ________________________________ -->

<?php
$nombre = 12 * 5 / 4;
echo $nombre ;
?>
<br>
<br>
<?php
$nombre1 = 45;
$nombre2 = ($nombre1 * 2) / 3;
echo $nombre2 ;
?>
<br>
<!-- ____________________ le modulo = reste de la division ___________________ -->

<?php
$nombre = 15 % 4;
echo $nombre ;
?>




















</body>

</html>