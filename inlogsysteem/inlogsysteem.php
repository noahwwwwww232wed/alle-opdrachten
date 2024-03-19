<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>login</title>
</head>
<form action="" method="post">
    <h2>INLOGGEN</h2>
    <label for="username">Gebruikersnaam:</label><br>
    <input type="text" id="username" name="username" placeholder="gebruikersnaam"> <br>
    <label for="pwd">Wachtwoord:</label><br>
    <input type="password" id="pwd" name="password" placeholder="wachtwoord"> <br>
    <button type="submit">Login</button>


</form>
<body>

<?php   
if(isset($_POST["username"]) && isset($_POST["password"]))
{
// array met users (naam password) namen en ww in een array zetten en  dan met for loop

    $gebruikersnaam = $_POST["username"];
    $wachtwoord = $_POST["password"];
    //$gebruiker1 = array("username" => "Noah", "password" => "Noah123");
    //$gebruiker2 = array("username" => "Lars", "password" => "Lars123");
    $gebruikerinfo = 
        array (
            array("gebruikersnaam"  => "noah", "ww" => "Noah123"),
            array("gebruikersnaam"  => "lars", "ww" => "Lars123"),
            array("gebruikersnaam" => "dyleno", "ww" => "Dyleno123"),
        );
           
    
    
    foreach ($gebruikerinfo as $aGebruiker) 
    {
       if($aGebruiker['gebruikersnaam'] == $gebruikersnaam && $aGebruiker['ww'] == $wachtwoord)
       {
            header("location: ingelogd.php  ");
       }

       elseif($aGebruiker['gebruikersnaam'] != $gebruikersnaam || $aGebruiker['ww'] != $wachtwoord)
       {
            echo "de gebruikersnaam of wachtwoord is onjuist";
       }
    }
   
   
   
   
    /*if ($gebruikersnaam == "Noah"  && $wachtwoord == "1234")
    {
        header("location: ingelogd.php");
    }

    elseif ($gebruikersnaam != "Noah")
    {
        echo "Het wachtwoord of gebruikersnaam is onjuist";
    }

    elseif($wachtwoord != "1234")
    {
        echo "Het wachtwoord of gebruikersnaam is onjuist";
    }

    else
    {
        echo "Je moet wel geldige invoer geven";
    }
*/

}
?>

</body>
</html>