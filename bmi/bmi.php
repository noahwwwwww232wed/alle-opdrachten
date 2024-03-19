<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<form>

Geef u gewicht in (kg): <input type = "text" name = "gewicht">
Geef u lengte in (cm): <input type = "text" name = "lengte">
<input type = "submit" value = "bereken bmi">

</form>    

<?php
if(isset($_GET["gewicht"]) && isset($_GET["lengte"]))
{
$gewicht = $_GET["gewicht"];
$lengte = $_GET["lengte"] / 100;
$bmi = $gewicht / ($lengte * $lengte);
echo "je bmi is: $bmi <br>";


if($bmi < 18.5)
{
    echo "je hebt ondergewicht";
}

if($bmi >= 18.5 && $bmi < 25)
{
    echo "je hebt gezond gewicht";
}

if($bmi >= 25 && $bmi < 30)
{
    echo "je hebt overgewicht";
}

if($bmi >= 30)
{
    echo "je hebt ernstig overgewicht";
}



}
?>




</body>
</html>