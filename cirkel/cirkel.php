
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>

    <form>
    Vul de diameter in (cm): <input type="text" name="diameter">
    <input type="submit">
    </form>
<?php
if(isset($_GET["diameter"]))
{
$a = $_GET["diameter"];                      //readline("vul hier de diameter in in centimeters ");

$straal = $a / 2;

$omtrek = 2* pi() * $straal;

echo "De omtrek is " . $omtrek . "<br>";

$oppervlakte = pi() * $straal * $straal;

echo "De oppervlakte is " . $oppervlakte . "<br>";
}

?> 


</body>
</html>

