<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title>To do list</title>
</head>

<body>
    <form id="formulier">
        <table>
            <tr>
                <th>Taak:</th>
                <th><input type="text" name="taak" placeholder="voer een taak in"> </th>
            </tr>

            <tr>
                <th>Deadline:</th>
                <th> <input type="date" name="deadline"></th>
            </tr>
        </table>

        <input type="submit" value="toevoegen">

    </form>
    <?php
    $connectie = mysqli_connect("localhost", "root", "", "taken");
    if (mysqli_connect_errno()) {
        echo "Er kon geen connectie worden gemaakt";
    }



    ?>
</body>

</html>