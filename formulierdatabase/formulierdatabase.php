<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="formulierdatabase.css">
    <title>formulierDB</title>
</head>

<body>

    <form id="formulier">
        <table>
            <tr>
                <th>Voornaam:</th>
                <th><input type="text" name="voornaam" placeholder="voer u voornaam in"></th>
            </tr>
            <tr>
                <th>Achternaam:</th>
                <th><input type="text" name="achternaam" placeholder="voer u achternaam in"></th>
            </tr>
            <tr>
                <th>Plaats:</th>
                <th><input type="text" name="plaats" placeholder="voer u plaats in"></th>
            </tr>
            <tr>
                <th>Postcode:</th>
                <th><input type="text" name="postcode" placeholder="voer u postcode in"></th>
            </tr>
            <tr>
                <th>Geslacht:</th>
            </tr>
            <tr>
                <th>Man:</th>
                <th><input type="radio" name="geslacht" value="Man"></th>
            </tr>
            <tr>
                <th>Vrouw:</th>
                <th> <input type="radio" name="geslacht" value="Vrouw"></th>
            </tr>
            <tr>
                <th>Anders:</th>
                <th><input type="radio" name="geslacht" value="Anders"> </th>
            </tr>
        </table>
        <input type="submit">
    </form>

    <?php

    if(empty($_GET['voornaam']) || empty($_GET['achternaam']) || empty($_GET['plaats']) || empty($_GET['postcode']) || !isset($_GET['geslacht'])) {
        echo "Vul alstublieft alle velden in";
        return;

    } else {
        echo "Dank u wel we sturen het op naar de database";
    }

    $connectie = mysqli_connect("localhost", "root", "", "formulier1");
    if($connectie == null) {
        die("geen connectie");
    }

    $voornaam = $_GET["voornaam"];
    $achternaam = $_GET["achternaam"];
    $plaats = $_GET["plaats"];
    $postcode = $_GET["postcode"];
    $geslacht = $_GET["geslacht"];


    $insertsql = "INSERT INTO formulier (voornaam, achternaam, plaats, postcode, geslacht) 
            VALUES ('$voornaam', '$achternaam', '$plaats', '$postcode', '$geslacht')";


    if(mysqli_query($connectie, $insertsql)) {
        echo "Succesvol toegevoegd!";
    } else {
        echo "Error: ".$insertsql."<br>".mysqli_error($connectie);
    }

    mysqli_close($connectie);




    ?>

</body>

</html>