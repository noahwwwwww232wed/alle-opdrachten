<?php

//ervoor zorgen dat als je op de link klikt je naar dit bestand word gestuurd 
//ervoor zorgen dat de rij verwijderd word
// daarna header naar de pagina ervoor?

include 'connectie.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM artist WHERE id = $id";
    $result = mysqli_query($connectie, $sql);

    if ($result) {
        echo "succesvol verwijderd";
        header("location: toets.php");

    } else {
        echo "mislukt om de rij te verwijderen" . mysqli_error($connectie);
    }
} else {
    echo "ongelidge id";
}

mysqli_close($connectie);

?>