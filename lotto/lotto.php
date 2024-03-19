<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Document</title>
</head>
<body>
<h1>geef 6 getallen tussen de 1 en 42 <h1>
<form>
Getal 1: <input type = "text" name = "getal1"><br>
Getal 2: <input type = "text" name = "getal2"><br>
Getal 3: <input type = "text" name = "getal3"><br>
Getal 4: <input type = "text" name = "getal4"><br>
Getal 5: <input type = "text" name = "getal5"><br>
Getal 6: <input type = "text" name = "getal6"><br>
<input type = "submit" value = "gamble">

</form>

<?php

// Controleren of er een GET is
if(!isset($_GET))
{
    return;
}

// Variables
$getal1 = $_GET["getal1"];
$getal2 = $_GET["getal2"];
$getal3 = $_GET["getal3"];
$getal4 = $_GET["getal4"];
$getal5 = $_GET["getal5"];
$getal6 = $_GET["getal6"];
$getallen = [$_GET["getal1"], $_GET["getal2"], $_GET["getal3"], $_GET["getal4"], $_GET["getal5"], $_GET["getal6"]];
$lottogetallen = array();
$correctegetallen = 0;

// Beeld formulier getallen af
for ($i=0; $i <= 5 ; $i++) { 
    echo $getallen[$i] . " ";
} 
echo "<br>";

// Beeld lottogetallen af
for ($i=0; $i <= 5 ; $i++) 
{
    $randomgetal = rand(1, 42);
    echo $randomgetal . " ";
    $lottogetallen[$i] = $randomgetal;
}
echo "<br>";

// Controleer de getallen
for ($i=0; $i <= 5 ; $i++) 
{
    if ($getallen[$i] == $lottogetallen[$i])
    {
        $correctegetallen++;
        // $correctegetallen = $correctegetallen + 1;
    }
}
echo "Het aantal correcte getallen is: $correctegetallen <br>";


if($correctegetallen == 3)
{
    echo "U heeft 10 euro gewonnen";
}

elseif($correctegetallen == 4)
{
    echo "U heeft duizend euro gewonnen";
}

elseif($correctegetallen == 5)
{
    echo "U heeft 100 duizend euro gewonnen";
}

elseif($correctegetallen == 6)
{
    echo "U heeft 10 miljoen euro gewonnen";
}

else
{
    echo "U heeft niks gewonnen";
}

?>
</body>
</html>