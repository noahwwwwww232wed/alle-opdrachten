
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    
<form>
Vul een getal in:<input type = "text" name = "vergelijking">
<input type = "submit" value = "vergelijk">

</form>


<?php
if(isset($_GET["vergelijking"]))
{
$vergelijking = $_GET["vergelijking"];                                    //readline("voer een vergelijkings getal in");
$getallen = array("12", "15", "29", "32", "102", "3", "7", "201", "430", "34", "44", "89", "66", "5", "55", "9", "2", "32", "11", "64");


echo " <br> vergelijkings getal: $vergelijking <br> ";

echo "getallen in de array: 12, 15, 29, 32, 102, 3, 7, 201, 430, 34, 44, 89, 66, 5, 55, 9, 2, 32, 11, 64  <br> ";

echo "Uitvoer: <br>";
foreach($getallen as $getal)
{
       
    
    if($vergelijking >= $getal)
    {
        echo $getal + 10 . " ";
    }

    elseif($vergelijking < $getal)
    {
        echo $getal - 5 . " ";
    }
    
}
}
?>
</body>
</html>

