<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Document</title>
</head>
<body>
 
<form>

Wat is u leeftijd:<input type = "text" name = "leeftijd">
<input type = "submit">

</form>

<?php
if(isset($_GET["leeftijd"]))
{
// Variables
$leeftijd = $_GET["leeftijd"];            //readline("wat is u leeftijd?");
$kaartje = 12;

// Controleren / Berekenen
if ($leeftijd <= 2)
  {
    $kaartje = 0;
  }
elseif ($leeftijd >= 3 && $leeftijd <= 18)
{
  $kaartje = $kaartje * 0.5;
}
elseif ($leeftijd >65)
{
  $kaartje = $kaartje * 0.75;
}

// Afbeelden
if ($kaartje == 0)
{
  echo "u kaartje is gratis";
}
else
{
  echo "u kaartje is $kaartje euro";
}
}
?>

</body>
</html>

