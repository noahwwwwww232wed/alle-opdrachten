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
$leeftijd = $_GET ["leeftijd"];         //readline("wat is u leeftijd?");

if($leeftijd >= 16)
{
    $leeftijd_16 = $leeftijd - 16;
    echo "Je bent $leeftijd_16 jaar ouder dan 16" . "<br>";
}

if($leeftijd < 50)
{
    $leeftijd_50 = 50 - $leeftijd;
    echo "Je bent $leeftijd_50 jaar jonger dan 50" . "<br>";
}

if($leeftijd < 67)
{
    $leeftijd_67 = 67 - $leeftijd;
    echo "Het duurt $leeftijd_67 jaar voordat je 67 wordt" . "<br>";
}

if($leeftijd < 100)
{
    $leeftijd_100 = 100 - $leeftijd;
    echo "Het duurt $leeftijd_100 jaar voordat je 100 wordt" . "<br>";
}
}
?>

</body>
</html>






