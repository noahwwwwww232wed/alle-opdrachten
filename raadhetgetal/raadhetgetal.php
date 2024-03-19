<!DOCTYPE html>

<html lang="en">

<head>

   
    <title>Document</title>

</head>

<body>

<form method="POST">

        <label for="cijfer">Raad het getal tussen de 1 en de 100:</label>    

        <input type="number" id="cijfer" name="cijfer" maxlength="3" required>

        <input type="submit" value="Raad">

</body>

</html>


<?php
session_start();

 

if(!isset($_SESSION['randomnumber'])){

    $_SESSION['randomnumber'] = rand(1,100);

    $_SESSION['pogingen'] = 0;

}

 

if(isset($_POST["cijfer"])){

    $gok = ($_POST['cijfer']);

    if( $gok >= 1 && $gok <= 100){

        $_SESSION['pogingen']++;

 

 

        if($gok < 1 || $gok > 100){

            echo "<br>" . "voer een geldig getal van 1 tot 100 in";

        }

        elseif($gok > $_SESSION['randomnumber']){

            echo "<br>" . "het getal is kleiner dan dit getal";

        }

        elseif($gok < $_SESSION['randomnumber']){

            echo "<br>" . "het getal is groter dan dit getal";

        }

        elseif($gok == $_SESSION['randomnumber']){

            echo "<br>" . "gefelicteerd je hebt het getal geraden in " . $_SESSION['pogingen'] . "pogingen";

            unset($_SESSION['randomNumber']);

            unset($_SESSION['attempts']);

        }

    }

 

}

 

 

?>

 

 

 



