<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<form>

<input type = "submit" value = "Random woord"><br>
 
Kies een letter:<input type = "text" name = "woorden">
<input type = "submit" value = "guess">
</form>


<?php
$woorden = array("beker", "bal", "raam", "auto", "fiets", "driehoek", "getal", "dyleno", "voet", "vaas", "plant", "paal", "tas", "jas", "stroom");
$woord = $woorden[ array_rand($woorden) ];

$lengte = strlen($woord);
$raadwoord = str_repeat(". " , $lengte);
echo "Het gekozen woord is: " . $raadwoord;








?>



</body>
</html>

