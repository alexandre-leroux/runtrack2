<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">


    <title>style</title>
</head>


<body>




<?php

@$i = $_GET['style'];




 if ( $i == 'style1')
 
 {?>                    <link rel="stylesheet" href="css/style1.css" /> 



                                <form action="index.php" method=get>


                                            <select name="style" id="style">

                                                <option name=style1 value="style1">Style 1</option>
                                                <option name=style2 value="style2">Style 2</option>
                                                <option name=style3 value="style3">Style 3</option>
                                            

                                            </select>


                                            <input type="submit" name=essayer value=essayer>


                                </form>


 <?php
 }
 ?>


<?php

if ( $i == 'style2')
 
 {?>                    <link rel="stylesheet" href="css/style2.css" /> 

                                <form action="index.php" method=get id=formstyle2>


                                                <select name="style" id="style">

                                                    <option name=style1 value="style1">Style 1</option>
                                                    <option name=style2 value="style2" selected>Style 2</option>
                                                    <option name=style3 value="style3">Style 3</option>
                                                

                                                </select>


                                                <input type="submit" name=essayer value=essayer>


                                    </form>

 <?php
 }
 ?>

<?php

if ( $i == 'style3')
 
 {?>                    <link rel="stylesheet" href="css/style3.css" /> 

                                <form action="index.php" method=get id=formstyle3>


                                            <select name="style" id="style">

                                                <option name=style1 value="style1">Style 1</option>
                                                <option name=style2 value="style2">Style 2</option>
                                                <option name=style3 value="style3" selected>Style 3</option>
                                            

                                            </select>


                                            <input type="submit" name=essayer value=essayer id=inputstyle3>


                                </form>

 <?php
 }
 ?>






</body>

</html>