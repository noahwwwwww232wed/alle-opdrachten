    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <title>toets 4</title>
    </head>
    <body>
    <form id="form" method="post">
            <table id="formulier">
                <tr>
                    <th>Artiest:</th>
                    <th><input type="text" id="artiets" class="checkform" name="artiest"></th>
                </tr>

                <tr>
                    <th>Land:</th>
                    <th><input type="text" id="land" class="checkform" name="land"></th>
                </tr>
            </table>
            <button onclick="checklogin()" type="button" name="knop" id="knop">versturen</button> <br><hr>




            <table id="tabel">
                <tr>
                    <th class="nal">Nr</th>
                    <th class="nal"> Artiest</th>
                    <th class="nal">Land</th>
                    <th class="nal">Verwijder</th>
                    <th class="nal">Edit</th>

                </tr>

                <?php
                $connectie = mysqli_connect("localhost", "root", "", "top2000");
                if (mysqli_connect_errno()) {
                    echo "Er kon geen connectie worden gemaakt";
                }


                $sql = "SELECT * FROM artist";
                $resultaat = mysqli_query($connectie, $sql);

                
                $artiesten = [];
                while ($rij = mysqli_fetch_assoc($resultaat)) {
                    $artiesten[] = $rij;
                }
                                                        
                if (isset($_POST["submit"] )) {
                    if (!empty($_POST["artiest"]) && !empty($_POST["land"])) {
                        $naam = $_POST["artiest"];
                        $land = $_POST["land"];

                        $sql = "INSERT INTO artist(name, country) VALUES('$naam', '$land')";
                        $resultaat = mysqli_query($connectie, $sql);
                        

                    } else {
                        echo "Vul alstublieft alle velden in" . "<br> <hr>";
                    }


                }

                foreach ($artiesten as $artiest) {
                    echo "<tr>";
                    echo "<td>" . $artiest["id"] . "</td>";
                    echo "<td>" . $artiest["name"] . "</td>";
                    echo "<td>" . $artiest["country"] . "</td>";
                    echo "<td><button onclick=\"verwijderen(" . $artiest["id"] . ")\">verwijder</button></td>";
                    echo "<td><button onclick=\"edit(" . $artiest["id"] . ")\">edit</button></td>";
                    echo "</tr>";
                }

                mysqli_close($connectie);
                ?>

            </table>
            <script src="toetsvier.js"></script>
            <div id="foutmelding"><h1>Foutmeldingen:</h1></div>
            <div id="output"></div>
    </body>
    </html>

