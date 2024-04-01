<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title>toets4</title>
</head>

<body>

    <form method="post">
        
        <table id="formulier">
            <tr>
                <th>Artiest:</th>
                <th><input type="text" name="artiest"></th>
            </tr>

            <tr>
                <th>Land:</th>
                <th><input type="text" name="land"></th>
            </tr>
        </table>

        <input type="submit" name="submit" value="voeg toe"><br>
        <hr>

        <?php

        // extra vakje aanmaken voor delete
        // ervoor zorgen dat er een link in het vakje staat
        // de link moet ervoor zorgen dat derij verwijderd word en gerefreshed 

        
        ?>


        <table id="tabel">
            <tr>
                <th class="nal">Nr</th>
                <th class="nal"> Artiest</th>
                <th class="nal">Land</th>
                <th class="nal">Delete</th>
                <th class="nal">Update</th>
            </tr>

            <?php
            include 'connectie.php';
            $sql = "SELECT * FROM artist";
            $resultaat = mysqli_query($connectie, $sql);


            $artiesten = [];
            while ($rij = mysqli_fetch_assoc($resultaat)) {
                $artiesten[] = $rij;
            }

            if (isset($_POST["submit"])) {
                if (!empty($_POST["artiest"]) && !empty($_POST["land"])) {
                    $naam = $_POST["artiest"];
                    $land = $_POST["land"];

                    $sql = "INSERT INTO artist(name, country) VALUES('$naam', '$land')";
                    $resultaat = mysqli_query($connectie, $sql);
                    echo "<meta http-equiv='refresh' content='0'>";

                } else {
                    echo "Vul alstublieft alle velden in" . "<br> <hr>";
                }

            }

            foreach ($artiesten as $artiest) {
                echo "<tr>";
                echo "<td>" . $artiest["id"] . "</td>";
                echo "<td>" . $artiest["name"] . "</td>";
                echo "<td>" . $artiest["country"] . "</td>";
                echo '<td><a href="delete.php?id=' . $artiest["id"] . '"><img id ="prullenbak" src="plaatjes/Trash_Can.svg.png"></a></td>';
                echo '<td><a href ="update.php?id=' . $artiest["id"] . '">update </a>';
                echo "</tr>";
                
            }
            
            mysqli_close($connectie);
            ?>

        </table>

</body>

</html>