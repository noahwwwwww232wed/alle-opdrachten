<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>



<body>

    <form id="myform" method="post">
        <table>
            <tr>
                <th>*Naam:</th>
                <th><input type="text" name="voornaam" class="inputs" id="voornaam" placeholder="vnaam"
                        onblur="check1()">
                    <input type="text" name="achternaam" class="inputs" id="achternaam" placeholder="anaam"
                        onblur="check1()">
                </th>
            </tr>
            <tr>
                <th>*adres:</th>
                <th><input type="text" name="adres" class="inputs" id="adres" placeholder="adres" size="51"
                        onblur="check1()"></th>
            </tr>
            <tr>
                <th>*PC Plaats:</th>
                <th><input type="text" name="postcode" class="inputs" id="postcode" placeholder="postcode" size="4"
                        onblur="check1()">
                    <input type="text" name="plaats" class="inputs" id="plaats" placeholder="plaats" onblur="check1()">
                </th>
            </tr>
            <tr>
                <th>Telefoon:</th>
                <th><input type="number" name="telefoon" class="inputs" id="telefoon" placeholder="0612345678"></th>
            </tr>
            <tr>
                <th>Email:</th>
                <th><input type="text" name="email" class="inputs" id="email" placeholder="email"></th>
            </tr>
            <tr>
                <th>Geslacht:</th>
                <th>
                    <input type="radio" id="vrouw" name="geslacht">Vrouw
                    <input type="radio" id="man" name="geslacht">Man
                </th>
            </tr>
            <tr>
                <th><button type="submit" onclick="checklogin()" name="knop" id="knop">versturen</button></th>
            </tr>
        </table>
        <hr><br>
    </form>
    <table>
        <tr>
            <th class="gegev">Nr</th>
            <th class="gegev">voornaam</th>
            <th class="gegev">achternaam</th>
            <th class="gegev">adres</th>
            <th class="gegev">postcode</th>
            <th class="gegev">plaats</th>
            <th class="gegev">telefoon</th>
            <th class="gegev">email</th>
            <th class="gegev">geslacht</th>
        </tr>




        <?php
        $connectie = mysqli_connect("localhost", "root", "", "toets4");
        if (mysqli_connect_errno()) {
            echo "Er kon geen connectie worden gemaakt";
        }



        $sql = "SELECT * FROM gegevens";
        $resultaat = mysqli_query($connectie, $sql);


        $gegevens = [];
        while ($rij = mysqli_fetch_assoc($resultaat)) {
            $gegevens[] = $rij;
        }

        if (isset($_POST["knop"])) {
            if (!empty($_POST["voornaam"]) && !empty($_POST["achternaam"]) && !empty($_POST["adres"]) && !empty($_POST["postcode"]) && !empty($_POST["plaats"]) && !empty($_POST["telefoon"]) && !empty($_POST["email"])) {

                $vnaam = $_POST["voornaam"];
                $anaam = $_POST["achternaam"];
                $adres = $_POST["adres"];
                $pc = $_POST["postcode"];
                $plaats = $_POST["plaats"];
                $tel = $_POST["telefoon"];
                $email = $_POST["email"];
                $geslacht = $_POST["geslacht"];

                $sql = "INSERT INTO gegevens (voornaam, achternaam, adres, postcode, plaats, telefoon, email, geslacht) VALUES('$vnaam', '$anaam', '$adres', '$pc', '$plaats', '$tel', '$email', '$geslacht')";
                $resultaat = mysqli_query($connectie, $sql);
                echo $resultaat;
            } else {
                echo "Vul alstublieft alle velden in" . "<br> <hr>";
            }

        }

    
        foreach ($gegevens as $gegeven) {
            echo "<tr>";
            echo "<td>" . $gegeven["id"] . "</td>";
            echo "<td>" . $gegeven["voornaam"] . "</td>";
            echo "<td>" . $gegeven["achternaam"] . "</td>";
            echo "<td>" . $gegeven["adres"] . "</td>";
            echo "<td>" . $gegeven["postcode"] . "</td>";
            echo "<td>" . $gegeven["plaats"] . "</td>";
            echo "<td>" . $gegeven["telefoon"] . "</td>";
            echo "<td>" . $gegeven["email"] . "</td>";
            echo "</tr>";
        }

        mysqli_close($connectie);

        ?>
    </table>
    <script src="toets4.js"></script>
</body>

</html>