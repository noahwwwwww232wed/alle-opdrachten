<!DOCTYPE html>
<html lang="en">
<head>
   
   <title>Document</title>
</head>
<body>
<form>

Geef een cijfer voor dit vak: <input type = "text" name = "cijfer">
<input type = "submit">
</form>

<?php
if(isset($_GET["cijfer"]))
{
$cijfer = $_GET["cijfer"];                        //readline("geef een cijfer voor dit vak?");
if($cijfer > 5.5)
{
   echo "gefeliciteerd u heeft een voldoende";   
} 
else 
{
   echo "Helaas u heeft een onvoldoende";
} 
}   
?>

</body>
</html>
