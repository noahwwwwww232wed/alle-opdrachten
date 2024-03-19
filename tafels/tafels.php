
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>

<form>
Geef een tafel op: <input type = "text" name = "tafel">
Geef een begintpunt: <input type = "text" name = "begin">
Geen een eindpunt: <input type = "text" name = "eind">
<input type = "submit">
</form>


<?php
if(isset($_GET["tafel"]) && isset($_GET["begin"]) && isset($_GET["eiund"]))
{
$tafel = $_GET["tafel"];                          //readline("geef een tafel");
$begin = $_GET["begin"];                          //readline("geef een begin");
$eind =  $_GET["eind"];                          //readline("geef een eind");

for($i = $begin; $i <= $eind; $i++)
{
    echo ($i * $tafel) . "<br>"; 
}



//$tafel2 =$_GET["tafel2"];                                           //readline("wilt u nog een tafel zien ");

//if($tafel2 == "ja")
//{
//    $tafel2 = readline("geef nog een tafel");
//}

//else
//{
//    return;
//}

//$begin2 = readline("geef een begin");
//$eind2 = readline("geef een eind");

//for($i = $begin2; $i <= $eind2; $i++)
//{
//    echo ($i * $tafel2) . "\n"; 
//}
}
?>


</body>
</html>














