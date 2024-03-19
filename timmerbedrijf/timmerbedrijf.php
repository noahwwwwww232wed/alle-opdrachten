<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>AboutHout</title>
</head>
<body>
<form method="post">

<div id="berken">
    <img src="plaatjes/berken.jpg"> <br>
    <input type="radio" name="houtsoort" value="berken">
    <label for="berken">Berken - prijs per m2 € 9,50</label>
</div>   

<div id="grenen">
    <img src="plaatjes/grenen.jpg"> <br>
    <input type="radio" name="houtsoort" value="grenen">
    <label for="grenen">Grenen - prijs per m2 € 8,50</label>
</div>

<div id="hardhout">
    <img src="plaatjes/hardhout.jpg"> <br>
    <input type="radio" name="houtsoort" value="hardhout">
    <label for="hardhout">Hardhout - prijs per m2 € 11,50</label>
</div>

<input type="radio" name="tafelvorm" value="rechthoekig">
<label for="rechthoekig">Ik wil een rechthoekige tafel</label> <br>

<input type="radio" name="tafelvorm" value="rond">
<label for="rond">Ik wil een ronde tafel</label> <br>

Breedte in mm <input type="number" name="breedte"  value="breedte"> <br>
Lengte in mm <input type="number" name="lengte"  value="lengte"> <br>
Diameter in mm <input type="number" name="diameter" value="diameter"> <br>
<input type="submit" value="Bestellen!">
<?php
if(isset($_POST["houtsoort"]) || isset($_POST["tafelvorm"]) || isset($_POST["afmeting"]))
{
    
$houtsoort = $_POST["houtsoort"];
$tafelvorm = $_POST["tafelvorm"];
$breedte = $_POST["breedte"];
$lengte = $_POST["lengte"];

$berkenp = 9.50;
$grenenp = 8.50;
$hardhoutp = 11.50;
$opp = $lengte * $breedte / 1000000;


if(isset($_POST['diameter'])){
    $diameter = $_POST["diameter"];
    $straal = $diameter / 2;
}//elseif(isset($_POST["breedte"] && isset($_POST["lengte"])))

if(! isset($_POST["diameter"])){
    echo "U heeft niet alles ingevuld";
}




if($tafelvorm == "rechthoekig"){
   if($houtsoort == "berken" || $houtsoort == "grenen" || $houtsoort == "hadrhout"){
        echo $opp * $berkenp;
   }
      
}   

if($tafelvorm == "rond"){
    echo $straal * $straal * pi();   
}

}
?>
</form>   
</body>
</html>

