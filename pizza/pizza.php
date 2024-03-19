<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<h2>Menukaart</h2>

<body>
<form method="post">
   

<div id= "pizza1">
    <img src="plaatjes/pizza1.jpg"> <br>
    <input type="radio" name= "pizzasoort" value="pizza1">
    <label for="pizza1">Pizza Spianata Piccante &#x20AC; 12,50</label>
</div>

<div id="pizza2">
    <img src="plaatjes/pizza2.jpg"> <br>
    <input type="radio" name="pizzasoort" value="pizza2" id="pizza2">
    <label for="pizza2">Pizza Seppi &#x20AC; 11,50</label>
</div>

<div id="pizza3">
    <img src="plaatjes/pizza3.jpg"> <br>
    <input type="radio" name= "pizzasoort" value="pizza3">
    <lablel for="pizza3">Pizza Tirato &#x20AC; 10,50</lablel>
</div>

<div id="extraolijf">
    <input type="checkbox" name= "extra1" value="olijf">
    <label for="olijf">Ik wil extra olijven bijbestellen &#x20AC; 2,50</label>
</div>

<div id="extrakaas">
    <input type="checkbox" name= "extra2" value="kaas">
    <label for="kaas">Ik wil extra kaas bijbestellen &#x20AC; 1,50</label>
</div>

<div id="bezorgen">
    <input type="checkbox" name= "extra3" value="bezorgen">
    <label for="bezorgen">Ik wil de pizza laten bezorgen &#x20AC; 3,50</label> 
</div>

<div>
    <input type="submit" name="knop" value="bestellen!">
</div>

</form>

<?php
if(isset($_POST["pizzasoort"]) || isset($_POST["extra1"]) || isset($_POST["extra2"]) || isset($_POST["extra3"]))

{
$soortpizza = $_POST["pizzasoort"];
if(isset($_POST["extra1"]))
{
    $olijf = "olijf";
} else
{
    $olijf = "";    
}

if(isset($_POST["extra2"]))
{
    $kaas = "kaas";
} else
{
    $kaas = "";    
}
if(isset($_POST["extra3"]))
{
    $bezorgen = "bezorgen";
} else
{
    $bezorgen = "";    
}

//$olijf = $_POST["extra1"]; 
//$kaas = $_POST["extra2"];
//$bezorgen = $_POST["extra3"];

$totaal = 0;
$pizza1prijs = 12.50;
$pizza2prijs = 11.50;
$pizza3prijs = 10.50;

if($_POST["knop"] == true)
{
    echo "Bedankt voor uw bestelling!" . "<br>";
}
if($soortpizza == "pizza1")
{
    echo "U heeft een pizza Spianata Piccante besteld: €12,50";  
    $totaal += $pizza1prijs;
}
if($soortpizza == "pizza2")
{
    echo "U heeft een pizza Seppi besteld: €11,50";
    $totaal += $pizza2prijs;
} 
if($soortpizza == "pizza3")
{
    echo "U heeft een pizza Tirato besteld: €10,50";
    $totaal += $pizza3prijs;
}
if($olijf == "olijf")
{
    echo "<br>" . "U heeft extra olijven besteld: €2,50";
    $totaal += 2.5;
}

if($kaas == "kaas")
{
    echo "<br>" . "U heeft extra kaas besteld: €1,50";
    $totaal += 1.5;
}

if($bezorgen == "bezorgen")
{
    echo "<br>" . "U wilt de pizza laten bezorgen; €3,50";
    $totaal += 3.5;
}

if($bezorgen != "bezorgen")
{
    echo "<br>" . "U komt de pizza afhalen";
}

echo "<br>" . "U betaalt €$totaal aan onze kassa";


}
?>

</body>
</html>
