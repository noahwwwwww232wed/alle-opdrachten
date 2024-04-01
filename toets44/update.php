<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title>update</title>
</head>

<body>
    <div id="form-container">
        <h1 id="update">le updatè</h1>

        <form id="form" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
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
    </div>

</body>

</html>

<?php
// zorgen dat je de id meegeeft in de url zodat hij weet welke hij moet updaten
// zorgen dat als je op de link klikt dat je een scherm krijgt dat je kan toevoegen
// dan opnieuw insert
// als op de knop geklikt word header terug naar andere pagina  
include 'connectie.php';

if (!$connectie) {
    die("niet gelukt om verbinding te maken");
}

if (isset($_POST['id'], $_POST['artiest'], $_POST['land'])) {
    $id = $_POST['id'];
    $artiest = $_POST['artiest'];
    $land = $_POST['land'];
}


$sql = "UPDATE `artist` SET `name`=?, `country`=? WHERE id=?";


if (mysqli_query($connectie, $sql)) {
    echo "succesvol geüpdatet";
    header("location: toets.php");

} else {
    echo "fout tijdens het updaten";
}






?>