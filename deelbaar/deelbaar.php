<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
<form>

    Vul een deeltal in: <input type = "text" name = "g1"> <br>
    Vul  een deler in: <input type = "text" name = "g2">
    <input type = "submit">

</form>    

<?php
if(isset($_GET["g1"]) && isset($_GET["g2"]))
{
$g1 = $_GET["g1"];                //readline("vul hier een deeltal in");
$g2 = $_GET["g2"];                 //readline("vul nog een deler in");


$a = $g1 % $g2;

echo $a . "\n";

if($a == 0 )
{
    echo "hij is deelbaar";
}
else 
{
    echo "hij is niet deelbaar";
}
}
?>


</body>
</html>



