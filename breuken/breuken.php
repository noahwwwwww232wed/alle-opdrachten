<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>

<form>

Voer hier een deeltal in: <input type="text" name="deeltal" id="deeltal"><br>
Voer hier een deler in: <input type="text" name="deler" id="deler">
<input type="submit" value="Send">


</form> 


<body>
<form method="post">

<?php

if(isset($_GET["deeltal"]) && isset($_GET["deler"]))
{
$deeltal = $_GET["deeltal"];
$deler = $_GET["deler"];

$antwoord = $deeltal / $deler;

if (is_float($antwoord))
{
    echo "Het deeltal is $deeltal <br>";
    echo "De deler is $deler <br>";
    echo "De som is $deeltal / $deler = $antwoord";
}


}
?>


</body>
</html>