<!DOCTYPE html>
<html lang="en">

<head>
    <link rel='stylesheet' href='database.css'>
    <title>database</title>
</head>

<body>

    <form>
        <div id="formulier">
            <div class="formulierdiv"><label>Voornaam:</label><input type="text" name="voornaam"
                    placeholder="voer u voornaam in"></div>
            <div class="formulierdiv"><label>Achternaam:</label><input type="text" name="achternaam"
                    placeholder="voer u achternaam in"></div>
            <div class="formulierdiv"><label>Plaats:</label><input type="text" name="plaats"
                    placeholder="voer u plaats in"></div>
            <div class="formulierdiv"><label>Postcode:</label><input type="text" name="postcode"
                    placeholder="voer u postcode in"></div>

            <input type="submit">

        </div>
    </form>


    <?php
    $connectie = mysqli_connect("localhost", "root", "", "flitsmeister2");
    $sql = 'SELECT * FROM cameras';

    $resultaat = mysqli_query($connectie, $sql);

    echo "<table id=\"tabel\"";
    while ($rij = mysqli_fetch_array($resultaat)) {
        echo '<tr>';
        echo '<td>' . $rij['id'] . '</td>';
        echo '<td>' . $rij[1] . '</td>';
        echo '<td>' . $rij[2] . '</td>';
        echo '<td>' . $rij[3] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    $connectie = mysqli_connect("localhost", "root", "", "flitsmeister");

    if (empty($_GET['address']) || empty($_GET['city']) || empty($_GET['max_speed'])) {
        echo "Vul alstublieft alle velden in";
        return;

    } else {
        echo "Dank u wel we sturen het op naar de database";
    }

    if ($connectie == null) {
        die("geen connectie");
    }
//Wendtpad 41 Varsselder 10 2023-10-03 07:25:38 2023-10-03 07:25:38
   $voornaam = $_GET["address"];
    $achternaam = $_GET["city"];
    $plaats = $_GET["max_speed"];


    $insertsql = "INSERT INTO cameras (['address'], city, max_speed) 
            VALUES ('$voornaam', '$achternaam', '$plaats')";


    if (mysqli_query($connectie, $insertsql)) {
        echo "Succesvol toegevoegd!";
    } else {
        echo "Error: " . $insertsql . "<br>" . mysqli_error($connectie);
    }

    mysqli_close($connectie);
    ?>





    <?php
    /*
    //1. connectie vastleggen met database en die variabel meegeven
    $connectie = mysqli_connect('localhost', 'root', '', 'flitsmeister');
    if ($connectie == null) {
        echo 'er kan geen verbinding worden gemaakt';
    }

    //2. query uitvoeren dus selecteren welke kolommen je uit de database/tabel wil laten zien
    $sql = 'SELECT * FROM cameras';

    //3. voert een query uit op de database adhv een connectie en een query
    
    $resultaat = mysqli_query($connectie, $sql);

    //4. zorg ervoor dat je de kolom namen in blokhaken kan gebruiken (het is een associative array)
    
    //$rij = mysqli_fetch_assoc($resultaat);
    
    //mysqli_fetch_array($resultaat); //check
    
    //5. je wilt alle rijen ophalen dit kan door een loop gebruiken]
    
    echo "<table id=\"tabel\"";
    while ($rij = mysqli_fetch_array($resultaat)) {
        echo '<tr>';
        echo '<td>' . $rij['id'] . '</td>';
        echo '<td>' . $rij[1] . '</td>';
        echo '<td>' . $rij[2] . '</td>';
        echo '<td>' . $rij[3] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    /*    echo "<table id=\"tabel\"";
        while ($rij = mysqli_fetch_assoc($resultaat)) {
            echo '<tr>';
                echo '<td>' . $rij['max_speed'] . '</td>';
                echo '<td>' . $rij['city'] . '</td>';
                echo '<td>' . $rij['created_at'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    







    mysqli_close($connectie);
    */
    ?>



</body>

</html>