<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>

<form>

Wat is u leeftijd? <input type = "text" name = "leeftijd">
<input type = "submit">
</form>


<?php
if(isset($_GET["leeftijd"]))
{
$leeftijd = $_GET ["leeftijd"];             //readline("wat is u leeftijd");

if($leeftijd < 9 || $leeftijd > 118)
{
   echo "het programma is gestopt";                  //return;
}


elseif ($leeftijd == 10 || $leeftijd == 16 || $leeftijd == 18 || $leeftijd == 50 || $leeftijd == 67 || $leeftijd == 100)
{
    echo "gefeliciteerd";
}

elseif ($leeftijd == 62)
{
    echo "dit is een waarschuwing je bent bijna 67 ";
}

else
{
    echo "deze leeftijd komt niet voor in de opdracht";
}
}


?>


</body>
</html>
