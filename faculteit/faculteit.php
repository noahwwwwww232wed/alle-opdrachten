<!DOCTYPE html>
<html lang="en">
<head>
   
   <title>Document</title>
</head>
<body>
   
<form>

Van welk getal wil je de faculteit weten: <input type = "text" name = "getal">
<input type = "submit" value = "bereken">


</form>


<?php
if(isset($_GET["getal"]))
{
$getal = $_GET["getal"];                            //readline("Van welk getal wil je de faculteit weten?");
$totaal = 1;

for ($i= $getal; $i > 0 ; $i--)
{ 
   echo  $i .  " x " . $totaal;
   
   $totaal = $i * $totaal;
   
   echo  " = " .$totaal . "<br>";
}

echo "De faculteit is : " . $totaal;
}
?>

</body>
</html>









